<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Serif+Display:ital@0;1&family=DM+Mono:wght@300;400;500&family=Instrument+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Ajouter un commentaire — TCG Collection</title>
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
            <li><a href="./" data-n="01/">Accueil</a></li>
            <li><a href="?page=commentaires" data-n="02/">Commentaires</a></li>
            <li><a href="?page=ajouter" data-n="03/" class="nav-cta active">Ajouter</a></li>
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

        <section style="padding-top: 10rem;">

            <!-- Message d'erreur -->
            <?php if (isset($error) && $error === true): ?>
                <div class="msg-error reveal">
                    Échec lors de l'insertion, vérifiez vos données.
                    <a href="javascript:history.go(-1);">Réessayer</a>
                </div>
            <?php endif; ?>

            <div class="reveal">
                <div class="label"><span class="label-n">03 /</span> Nouveau commentaire</div>
                <h2 class="section-h">Partagez votre<em> avis.</em></h2>
                <p class="about-text">
                    Collectionneur ou passionné, votre retour compte. Remplissez le formulaire 
                    ci-dessous pour laisser votre commentaire.
                </p>
            </div>

            <!-- Formulaire -->
            <div class="form-wrap reveal">
                <form id="guestbook-form" method="POST" action="?page=ajouter">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" 
                               placeholder="votre@email.com" 
                               maxlength="120"
                               required>
                        <small>Email valide, max 120 caractères</small>
                    </div>

                    <div class="form-group">
                        <label for="full_name">Nom complet</label>
                        <input type="text" id="full_name" name="full_name" 
                               placeholder="Votre nom complet" 
                               minlength="5" maxlength="120"
                               required>
                        <small>Entre 5 et 120 caractères</small>
                    </div>

                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input type="text" id="title" name="title" 
                               placeholder="Ex: Super collection !" 
                               minlength="5" maxlength="180"
                               required>
                        <small>Entre 5 et 180 caractères</small>
                    </div>

                    <div class="form-group">
                        <label for="text_comment">Commentaire</label>
                        <textarea id="text_comment" name="text_comment" rows="6" 
                                  placeholder="Écrivez votre commentaire ici..." 
                                  minlength="5" maxlength="1000"
                                  required></textarea>
                        <small>Entre 5 et 1000 caractères — <span id="char-count">1000</span> restants</small>
                    </div>

                    <button type="submit" class="submit-btn">Publier le commentaire →</button>
                </form>
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