<?php
# stagiaires/Michael/06-exercice-classe1/model/CommentaireModel.php

/**
 * Ajoute un commentaire dans la DB
 * @return bool true si succès, false si échec
 */
function addCommentaire(PDO $db, string $email, string $full_name, string $title, string $text_comment): bool
{
    // validation email (max 120)
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($email === false || strlen($email) > 120) return false;

    // nettoyage + validation full_name (5-120)
    $full_name = strip_tags($full_name);
    $full_name = trim($full_name);
    $full_name = htmlspecialchars($full_name);
    if (strlen($full_name) < 5 || strlen($full_name) > 120) return false;

    // nettoyage + validation title (5-180)
    $title = strip_tags($title);
    $title = trim($title);
    $title = htmlspecialchars($title);
    if (strlen($title) < 5 || strlen($title) > 180) return false;

    // nettoyage + validation text_comment (5-1000)
    $text_comment = strip_tags($text_comment);
    $text_comment = trim($text_comment);
    $text_comment = htmlspecialchars($text_comment);
    if (strlen($text_comment) < 5 || strlen($text_comment) > 1000) return false;

    // 1 entrée utilisateur = requête préparée
    $prepare = $db->prepare("INSERT INTO `commentaire` (`email`, `full_name`, `title`, `text_comment`)
        VALUES (:email, :full_name, :title, :text_comment)");

    $prepare->bindValue(':email', $email);
    $prepare->bindValue(':full_name', $full_name);
    $prepare->bindValue(':title', $title);
    $prepare->bindValue(':text_comment', $text_comment);

    return $prepare->execute();
}

/**
 * Récupère tous les commentaires par ordre décroissant
 * @return array
 */
function readAllCommentaires(PDO $connect): array
{
    // pas de requête préparée car pas d'entrée user
    $stmt = $connect->query("SELECT * FROM `commentaire` ORDER BY `post_date` DESC");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $result;
}

/**
 * Compte le nombre total de commentaires (sans les charger)
 * @return int
 */
function countAllCommentaires(PDO $connect): int
{
    $stmt = $connect->query("SELECT COUNT(`id`) AS `nb` FROM `commentaire`");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return (int) $result['nb'];
}

// bonus pagination

/**
 * Récupère les commentaires avec pagination
 * @return array
 */
function readPaginationCommentaires(PDO $connect, int $page = 1): array
{
    $offset = ($page - 1) * NB_BY_PAGGE;

    $prepare = $connect->prepare("SELECT * FROM `commentaire` 
        ORDER BY `post_date` DESC 
        LIMIT :limit OFFSET :offset");

    $prepare->bindValue(':limit', NB_BY_PAGGE, PDO::PARAM_INT);
    $prepare->bindValue(':offset', $offset, PDO::PARAM_INT);
    $prepare->execute();

    $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
    $prepare->closeCursor();
    return $result;
}