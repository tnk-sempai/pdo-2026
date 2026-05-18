<?php
// stagiaires/Michael/06-exercice-classe1/controller/routerController.php

# Importer le fichier model qui contient nos fonctions de la table commentaire
require ROOT_PROJECT."/model/CommentaireModel.php";

# Création de notre connexion PDO (avec try catch)
try{
    $connectDB = new PDO(MARIA_DSN, DB_CONNECT_USER, DB_CONNECT_PWD);
}catch(Exception $e){
    die($e->getMessage());
}

# suivant les actions utilisateur, appelez les vues.
include ROOT_PROJECT."/view/homepage.html.php";