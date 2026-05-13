<?php
// stagiaires/Michael/06-exercice-classe1/controller/routerController.php

# Importer le fichier model qui contient nos fonctions de la table commentaire

# Création de notre connexion PDO (avec try catch)

# suivant les actions utilisateur, appelez les vues.

if(!isset($_GET['page'])){
    //  on charge la page d'accueil
    include PROJECT_PATH."/view/homepage.html.php";
// sinonsi la variable get 'page' a une valeur 
// acceptée dans la constante de type array PUBLIC_PAGES
}elseif(in_array($_GET['page'],PUBLIC_PAGES)){

  // si la variable get correspond à une valeur
  // acceptée dans le tableau
  include PROJECT_PATH."/view/".$_GET['page'].".html".".php";

// sinon, la variable get page existe
}else{

    // Appel de l'erreur 404
    include PROJECT_PATH."/view/404.php";

}