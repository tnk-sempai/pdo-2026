<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/styles.css">
    <title>NW - <?= ucfirst($_GET['p']) ?></title>
</head>

<body>
<header>
<nav class="nav">
        <?php
        include ROOT_PROJECT . "/view/inc/header.php";
        ?>
    </nav>
</header>
<div>
    <section class="section_wrapper">
    <?php
            $nbComment = count($comments);
            if (empty($nbComment)):
            ?>
                <h2>Il n'y a pas encore de messages</h2>
            <?php
            // il y a au mois un message
            else:
                // preparation du pluriel si on a plus d'un message
                $pluriel = $nbComment > 1 ? "s" : "";
            ?>
                <section class="comments_section">
                    <h2>Message<?= $pluriel ?> récent<?= $pluriel ?> (<?= $nbComment ?>)</h2>
                    <?php
                    foreach ($comments as $comment):
                    ?>
                        <div class="comments_card">
                            <h3> <span class="write_by"> Ecrit par:</span> <?= htmlspecialchars($comment['email']) ?> le <?= $comment['post_date'] ?></h3>
                            <p><?=nl2br($comment['text_comment']) ?></p>
                        </div>
                <?php
                    endforeach;
                endif;
                ?>
</div>        </section>
</section>
</body>

</html>