<?php
# stagiaires/Michael/06-exercice-classe1/model/CommentaireModel.php

// utilisez le typage si possible

function addCommentaire(PDO $db,string $email,string $text_comment,string $title,string $full_name):bool{
    $email=filter_var($email,FILTER_VALIDATE_EMAIL);
    $text_comment=htmlspecialchars(trim(strip_tags($text_comment)));
    $full_name = htmlspecialchars(trim(strip_tags($full_name)));
    $title = htmlspecialchars(trim(strip_tags($title)));
    
    if($email==false || empty($text_comment)) return false;
    $prepare = $db->prepare("
    INSERT INTO `commentaire`(`email`,`text_comment`,`full_name`,`title`)
    VALUES(:email,:text_comment,:full_name,:title); 
    ");
    # on met nos val dans 
    $prepare->bindValue(':email',$email);
    $prepare->bindValue(':text_comment',$text_comment);
    $prepare->bindValue(':full_name',$full_name);
    $prepare->bindValue(':title',$title);

    # on exécute la requete
   $retour=$prepare->execute();
   return $retour; // true en cas de réussite, false en cas d'échec




//   var_dump($db,$mail,$message);


}

function readAllCommentaires(){

}

function countAllCommentaires(){
    
}

// bonus pagination


function readPaginationCommentaires(){

}