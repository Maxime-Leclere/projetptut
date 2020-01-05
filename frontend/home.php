<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once 'head.php' ?>
    </head>

    <body>
        <?php include_once 'header.php' ?>

        <main class="custom_body">
            <?php
            include_once '../backend/Date.php';
            include_once 'config.php';
            use backend\Date;
            $date   = new Date();
            $year   = \date('Y');
            $month  = \date('n');
            $day    = \date('j');
            $articles = $date->getArticles($year);
            ?>
            <div class="articles">
                <?php if (isset($articles)) {
                    foreach ($articles as $a) {?>
                    <div class="article">
                        <?php echo $a; ?>
                    </div>
                <?php } }?>
            </div>
            <form action="AddArticle.php" method="post">
                <label>Titre</label>
                <input type="text" id="title" name="title" placeholder="taper votre titre" required><br>
                <label>Texte</label>
                <textarea id="text" name="text" placeholder="taper votre texte" required></textarea><br>
                <button type="submit">envoyer</button>
            </form>
        </main>
        <?php include_once 'footer.php' ?>
    </body>
</html>