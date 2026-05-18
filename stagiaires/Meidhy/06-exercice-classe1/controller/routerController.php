<?php
// stagiaires/Michael/06-exercice-classe1/controller/routerController.php
require ROOT_PROJECT . "/model/CommentaireModel.php";

# Connexion PDO (avec try catch)
try {
    $connectDB = new PDO(MARIA_DSN, DB_CONNECT_USER, DB_CONNECT_PWD);
} catch (Exception $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

# Variable pour le message de succès (redirection depuis ajouter)
$successMessage = isset($_GET['success']) ? true : false;

# Routage suivant $_GET['page']
$page = $_GET['page'] ?? 'accueil';

switch ($page) {

    case 'commentaires':
        // compter sans charger
        $nbCommentaires = countAllCommentaires($connectDB);
        // charger les commentaires
        $commentaires = readAllCommentaires($connectDB);
        $connectDB = null;
        include ROOT_PROJECT . "/view/commentaire_html.php";
        break;

    case 'ajouter':
        // traitement du formulaire POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST' 
            && isset($_POST['email'], $_POST['full_name'], $_POST['title'], $_POST['text_comment'])) {
            
            $insert = addCommentaire(
                $connectDB,
                $_POST['email'],
                $_POST['full_name'],
                $_POST['title'],
                $_POST['text_comment']
            );

            if ($insert) {
                $connectDB = null;
                // redirection vers commentaires avec message de succès
                header("Location: ?page=commentaires&success=1");
                exit();
            } else {
                $error = true;
            }
        }
        $connectDB = null;
        include ROOT_PROJECT . "/view/ajouter_html.php";
        break;

    // accueil par défaut
    default:
        // on récupère le nombre de commentaires (sans les charger)
        $nbCommentaires = countAllCommentaires($connectDB);
        $connectDB = null;
        include ROOT_PROJECT . "/view/homepage.html.php";
        break;
}