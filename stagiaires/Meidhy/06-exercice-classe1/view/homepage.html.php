<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Serif+Display:ital@0;1&family=DM+Mono:wght@300;400;500&family=Instrument+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>TCG Collection — Accueil</title>
</head>
<body id="top">

    <!-- Custom cursor -->
    <div id="cur"></div>
    <div id="cur-ring"></div>

    <!-- Ambient blobs -->
    <div class="blob-1"></div>
    <div class="blob-2"></div>

    <!-- Navigation -->
    <nav>
        <a href="./" class="nav-brand">TANUKI TCG</a>
        <ul class="nav-links">
            <li><a href="./" data-n="01/" class="active">Accueil</a></li>
            <li><a href="?page=commentaires" data-n="02/">Commentaires</a></li>
            <li><a href="?page=ajouter" data-n="03/" class="nav-cta">Ajouter</a></li>
        </ul>
        <button class="burger" id="burger">
            <span></span><span></span><span></span>
        </button>
    </nav>

    <!-- Mobile menu -->
    <div class="mobile-menu" id="mobile-menu">
        <a href="./">Accueil</a>
        <a href="?page=commentaires">Commentaires</a>
        <a href="?page=ajouter">Ajouter</a>
    </div>

    <div class="container">

        <!-- HERO -->
        <section class="hero">
            <div class="hero-eyebrow">
                <span class="dot"></span>
                <span>Collection &amp; Passion</span>
                <span class="line"></span>
            </div>
            <h1 class="hero-title">
                <span class="outline">Trading</span><br>
                Card <span class="accent-text">Games</span>
            </h1>
            <p class="hero-sub">
                Pokémon, One Piece, Naruto — trois univers, une seule passion.
                Partagez votre avis sur ma collection et laissez un commentaire.
            </p>
            <div class="hero-cta-row">
                <a href="?page=commentaires" class="btn-primary">Voir les avis →</a>
                <a href="?page=ajouter" class="btn-ghost">Laisser un mot</a>
            </div>
        </section>

        <!-- ABOUT / GALLERY -->
        <section class="surface" id="collection">
            <div class="about-grid">
                <div class="about-sticky reveal">
                    <div class="label"><span class="label-n">01 /</span> Ma collection</div>
                    <h2 class="section-h">Trois univers,<em> une passion.</em></h2>
                    <p class="about-text">
                        Depuis des années, je collectionne les cartes TCG à travers trois licences 
                        qui m'accompagnent : Pokémon, le classique indémodable avec ses artworks 
                        légendaires ; One Piece, la nouvelle vague qui a conquis la communauté ;
                        et Naruto, le jeu de cartes qui a marqué ma jeunesse.
                    </p>
                    <p class="about-text">
                        Chaque carte raconte une histoire. Chaque booster ouvert est un moment 
                        d'excitation. Bienvenue dans mon univers.
                    </p>
                </div>

                <div class="gallery reveal">
                    <div class="gallery-card">
                        <img src="img/pkm-tcg.webp" alt="Carte Pokémon TCG">
                        <div class="card-label">Pokémon TCG</div>
                    </div>
                    <div class="gallery-card">
                        <img src="img/optcg.webp" alt="Carte One Piece TCG">
                        <div class="card-label">One Piece TCG</div>
                    </div>
                    <div class="gallery-card">
                        <img src="img/narutotcg.jpg" alt="Carte Naruto TCG">
                        <div class="card-label">Naruto TCG</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- STATS + LINKS -->
        <section>
            <div class="reveal">
                <div class="label"><span class="label-n">02 /</span> Communauté</div>
                <h2 class="section-h">Rejoignez la<em> discussion.</em></h2>
                <p class="about-text">
                    Que vous soyez collectionneur aguerri ou simplement curieux, votre avis 
                    m'intéresse. N'hésitez pas à parcourir les commentaires ou à en ajouter un.
                </p>

                <div class="stats-bar">
                    <div class="stat-item">
                        <div class="stat-num"><?= $nbCommentaires ?></div>
                        <div class="stat-label">Commentaire<?= $nbCommentaires > 1 ? 's' : '' ?></div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num">3</div>
                        <div class="stat-label">Univers TCG</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-num">∞</div>
                        <div class="stat-label">Passion</div>
                    </div>
                </div>

                <div class="bottom-links">
                    <a href="?page=commentaires" class="btn-primary">Voir les commentaires →</a>
                    <a href="?page=ajouter" class="btn-ghost">Ajouter un commentaire</a>
                </div>
            </div>
        </section>

    </div>

    <!-- Footer -->
    <footer>
        <div>
            <span class="f-logo">Tanuki</span>
            <span class="f-copy">&copy; <?= date("Y") ?> · Tous droits réservés</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
</body>
</html>