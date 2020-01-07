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
                        <?php header("Content-type: image/jpeg");echo $a; ?>
                    </div>
                <?php } }?>
            </div>

            <form enctype="multipart/form-data" action="AddArticle.php" method="post">
                <label>Titre</label><br>
                <input type="text" id="Title" name="title" placeholder="taper votre titre" required><br>
                <input type="file" name="image"><br>
                <label>Texte</label><br>
                <textarea id="Text" name="text" placeholder="taper votre texte" required></textarea><br>
                <button type="submit">envoyer</button>
            </form>
        </main>
        <?php include_once 'footer.php' ?>
    </body>
</html>