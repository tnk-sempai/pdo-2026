<?php
// stagiaires/Michael/06-exercice-classe1/controller/routerController.php
require ROOT_PROJECT."/model/CommentaireModel.php";

# Importer le fichier model qui contient nos fonctions de la table commentaire

# Création de notre connexion PDO (avec try catch)
try{
    $connectDB = new PDO(MARIA_DSN, DB_CONNECT_USER, DB_CONNECT_PWD);
}catch(Exception $e){
    die($e->readAllCommentaires());
}

# suivant les actions utilisateur, appelez les vues.

if(isset($_POST['email'], $_POST['text_comment'])){
    // envoie de nos variables nécessaires à l'insertion 
    $insert = addCommentaire($connectDB, $_POST['email'], $_POST['text_comment']  ); 
}

$commentaires = readAllCommentaires($connectDB);
$connectDB = null; 
include ROOT_PROJECT."/view/homepage.html.php"; 
