<?php
# stagiaires/Michael/06-exercice-classe1/model/CommentaireModel.php

// utilisez le typage si possible

function addCommentaire(PDO $db, string $mail, string $text_comment): bool{
        $mail = filter_var($mail,FILTER_VALIDATE_EMAIL);
        $commentaire = strip_tags($commentaire);
        $commentaire = trim($commentaire);
        $commentaire = htmlspecialchars($commentaire);

        if($mail === false || empty($message))   
                        return false; 
        $prepare = $db->prepare("INSERT INTO `commentaire`(`email`, `text_comment`)
        VALUES (:email, :text);
    ");
    
    $prepare->bindValue(':email', $mail);
    $prepare->bindValue(':text', $commentaire);

    $retour = $prepare->execute(); 
    return $retour;
}

function readAllCommentaires(PDO $connect): array{
    
    // pas besoin de requete preparée car pas d'entrée user
    $stmt = $connect->query("SELECT * FROM `commentaire` 
    ORDER BY `post_date` DESC");
    
    // tableau avec les résultats 
    $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
    
    // Bonne pratique
    $stmt->closeCursor();

    // retour au tableau 
    return $result;
}

function countAllCommentaires(){
    
}

// bonus pagination


function readPaginationCommentaires(){

}