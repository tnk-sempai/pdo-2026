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
<div class="hero">
    <div class="hero_wrapper">
    <h1>Connect with the <span>Natural World</span> </h1>
<p>Discover the restorative power of nature. We bridge the gap between modern living and the quiet, grounded wisdom of the Earth’s most serene landscapes. </p>
</div>
</div>
<div class="gallery">
            <div class="card">
            <div class="img_label">
            <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" >
    <span>TOP TOUR</span>  </div>
    <a class="add_comment_link" href="?p=addComment">Ajoutre un commentaire</a>
      
        </div>
    <div class="card">
            <div class="img_label">
            <img src="https://images.unsplash.com/photo-1494806812796-244fe51b774d?q=80&w=1734&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            <span>TOP TOUR</span>  
          </div>
          <a class="add_comment_link" href="?p=addComment">Ajoutre un commentaire</a>
        </div>
        <div class="card">
            <div class="img_label">
            <img src="https://images.unsplash.com/photo-1601888908963-5e32087f25f7?q=80&w=1746&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            <span>TOP TOUR</span>  
        </div>
        <a class="add_comment_link" href="?p=addComment">Ajoutre un commentaire</a>
        </div>
    </div>
</body>

</html>