<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un commentaire - Livre d'or</title>
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
            <li><a href="./">Accueil</a></li>
            <li><a href="?page=commentaires">Commentaires</a></li>
            <li><a href="?page=ajouter" class="active">Ajouter un commentaire</a></li>
        </ul>
    </nav>

    <div class="container">
        <header>
            <h1>Ajouter un commentaire</h1>
            <p>Partagez votre avis !</p>
        </header>

        <main>
            <!-- Message d'erreur -->
            <?php if (isset($error) && $error === true): ?>
                <div class="insert_message2">
                    Échec lors de l'insertion, vérifiez vos données.
                    <a href="javascript:history.go(-1);">Réessayer</a>
                </div>
            <?php endif; ?>

            <!-- Formulaire d'ajout -->
            <section class="form-section">
                <form id="guestbook-form" method="POST" action="?page=ajouter">
                    <div class="form-group">
                        <label for="email">Votre email *</label>
                        <input type="email" id="email" name="email" 
                               placeholder="Ex: jean@cf2m.be" 
                               maxlength="120"
                               required>
                        <small>Email valide, max 120 caractères</small>
                    </div>

                    <div class="form-group">
                        <label for="full_name">Votre nom complet *</label>
                        <input type="text" id="full_name" name="full_name" 
                               placeholder="Ex: Jean Dupont" 
                               minlength="5" maxlength="120"
                               required>
                        <small>Entre 5 et 120 caractères</small>
                    </div>

                    <div class="form-group">
                        <label for="title">Titre du commentaire *</label>
                        <input type="text" id="title" name="title" 
                               placeholder="Ex: Super expérience !" 
                               minlength="5" maxlength="180"
                               required>
                        <small>Entre 5 et 180 caractères</small>
                    </div>

                    <div class="form-group">
                        <label for="text_comment">Votre commentaire *</label>
                        <textarea id="text_comment" name="text_comment" rows="5" 
                                  placeholder="Écrivez votre commentaire ici..." 
                                  minlength="5" maxlength="1000"
                                  required></textarea>
                        <small>Entre 5 et 1000 caractères — <span id="char-count">1000</span> restants</small>
                    </div>

                    <button type="submit" class="submit-btn">Publier le commentaire</button>
                </form>
            </section>
        </main>

        <footer>
            <p>&copy; <?= date("Y") ?> - Livre d'or - CF2M</p>
        </footer>
    </div>

    <script src="js/script.js"></script>
</body>
</html>