<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/styles.css">
    <title>Page d'accueil</title>
</head>

<body>
<header>
<nav class="nav">
        <?php
        include ROOT_PROJECT . "/view/inc/header.php";
        ?>
    </nav>
</header>
   
    <div class="form_wrapper">
    <h2>Ajoutez un commentaire</h2>
    <form class="form" action="" method="POST" >
    <label for="email">Votre mail</label>
        <input type="email" id="email" name="email" placeholder="email@gmail.com" autocomplete="email">
        <label for="full_name">Prenom</label>
        <input type="text" id="full_name" name="full_name" placeholder="Michel Michel">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="title">
        <label for="text_comment">Message</label>
        <textarea id="text_comment" name="text_comment" rows="4" placeholder="Ce que vous avez pensé de votre visite..."></textarea>
        <button type="submit" class="submit-btn">Publier le message</button>
    </form>
    </div>
</body>

</html>