<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Serif+Display:ital@0;1&family=DM+Mono:wght@300;400;500&family=Instrument+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Commentaires — TCG Collection</title>
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
            <li><a href="?page=commentaires" data-n="02/" class="active">Commentaires</a></li>
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

        <section style="padding-top: 10rem;">

            <!-- Message de succès -->
            <?php if ($successMessage): ?>
                <div class="msg-success reveal">Merci pour votre commentaire, il a bien été enregistré !</div>
            <?php endif; ?>

            <div class="reveal">
                <div class="label"><span class="label-n">02 /</span> Avis de la communauté</div>

                <!-- Compteur conditionnel -->
                <?php if ($nbCommentaires === 0): ?>
                    <h2 class="section-h">Pas encore de<em> commentaire</em></h2>
                <?php elseif ($nbCommentaires === 1): ?>
                    <h2 class="section-h">Il y a<em> 1 commentaire</em></h2>
                <?php else: ?>
                    <h2 class="section-h">Il y a<em> <?= $nbCommentaires ?> commentaires</em></h2>
                <?php endif; ?>
            </div>

            <!-- Liste des commentaires -->
            <?php if (!empty($commentaires)): ?>
                <div class="comments-list">
                    <?php foreach ($commentaires as $commentaire): ?>
                        <div class="comment-card reveal">
                            <h3 class="c-title"><?= htmlspecialchars($commentaire['title']) ?></h3>
                            <div class="c-meta">
                                <span class="c-author"><?= htmlspecialchars($commentaire['full_name']) ?></span>
                                <span>·</span>
                                <span><?= htmlspecialchars($commentaire['email']) ?></span>
                                <span>·</span>
                                <span><?= $commentaire['post_date'] ?></span>
                            </div>
                            <p class="c-body"><?= htmlspecialchars($commentaire['text_comment']) ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Liens bas de page -->
            <div class="bottom-links reveal">
                <a href="#top" class="link-arrow">↑ Retour en haut</a>
                <a href="?page=ajouter" class="btn-ghost">Ajouter un commentaire</a>
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