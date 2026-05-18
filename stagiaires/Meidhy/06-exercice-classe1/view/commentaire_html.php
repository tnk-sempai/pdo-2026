<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaires - Livre d'or</title>
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
            <li><a href="?page=commentaires" class="active">Commentaires</a></li>
            <li><a href="?page=ajouter">Ajouter un commentaire</a></li>
        </ul>
    </nav>

    <div class="container">
        <main>
            <!-- Message de succès après insertion -->
            <?php if ($successMessage): ?>
                <div class="insert_message">Merci pour votre commentaire !</div>
            <?php endif; ?>

            <!-- Compteur de commentaires -->
            <section class="messages-section">
                <?php if ($nbCommentaires === 0): ?>
                    <h2>Pas encore de commentaire</h2>
                <?php elseif ($nbCommentaires === 1): ?>
                    <h2>Il y a 1 commentaire</h2>
                <?php else: ?>
                    <h2>Il y a <?= $nbCommentaires ?> commentaires</h2>
                <?php endif; ?>

                <!-- Liste des commentaires -->
                <?php if (!empty($commentaires)): ?>
                    <div id="messages-container">
                        <?php foreach ($commentaires as $commentaire): ?>
                            <div class="comment-card">
                                <h3><?= htmlspecialchars($commentaire['title']) ?></h3>
                                <p class="comment-meta">
                                    Écrit par <strong><?= htmlspecialchars($commentaire['full_name']) ?></strong>
                                    (<?= htmlspecialchars($commentaire['email']) ?>)
                                    le <?= $commentaire['post_date'] ?>
                                </p>
                                <p class="comment-text"><?= htmlspecialchars($commentaire['text_comment']) ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>

            <!-- Liens en bas de page -->
            <section class="links-section">
                <div class="links-buttons">
                    <a href="#top" class="btn">Retour en haut</a>
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