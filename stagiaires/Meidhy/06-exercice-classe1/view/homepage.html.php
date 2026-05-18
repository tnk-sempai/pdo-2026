<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Livre d'or</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Mono:wght@300;400;500&family=Instrument+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

    <!-- Menu sticky -->
    <nav class="navbar">
        <div class="nav-brand">Livre d'or</div>
        <button class="hamburger" id="hamburger">&#9776;</button>
        <ul class="nav-links" id="nav-links">
            <li><a href="./" class="active">Accueil</a></li>
            <li><a href="?page=commentaires">Commentaires</a></li>
            <li><a href="?page=ajouter">Ajouter un commentaire</a></li>
        </ul>
    </nav>

    <div class="container">
        <header>
            <h1>Bienvenue sur mon Livre d'or</h1>
            <p>Découvrez ma passion et laissez-moi un petit mot !</p>
        </header>

        <main>
            <!-- Section présentation -->
            <section class="about-section">
                <h2>À propos de moi</h2>
                <p>
                    Passionné de développement web, j'apprends actuellement le PHP et les bases de données
                    au CF2M. Ce projet est un exercice de mise en pratique de l'architecture MVC en procédural.
                    J'aime créer des interfaces propres et fonctionnelles, et je m'intéresse aussi au JavaScript
                    et à tout ce qui touche au frontend.
                </p>

                <div class="gallery">
                    <img src="img/photo1.jpg" alt="Photo 1">
                    <img src="img/photo2.jpg" alt="Photo 2">
                    <img src="img/photo3.jpg" alt="Photo 3">
                </div>
            </section>

            <!-- Liens vers commentaires -->
            <section class="links-section">
                <?php
                $pluriel = $nbCommentaires > 1 ? "s" : "";
                ?>
                <p>
                    <?php if ($nbCommentaires === 0): ?>
                        Pas encore de commentaire, soyez le premier !
                    <?php elseif ($nbCommentaires === 1): ?>
                        Il y a déjà <strong>1 commentaire</strong>.
                    <?php else: ?>
                        Il y a déjà <strong><?= $nbCommentaires ?> commentaires</strong>.
                    <?php endif; ?>
                </p>
                <div class="links-buttons">
                    <a href="?page=commentaires" class="btn">Voir les commentaires</a>
                    <a href="?page=ajouter" class="btn btn-accent">Ajouter un commentaire</a>
                </div>
            </section>
        </main>

        <footer>
            <p>&copy; <?= date("Y") ?> - Livre d'or - CF2M</p>
        </footer>
    </div>

    <script src="js/script.js"></script>
</body>
</html>