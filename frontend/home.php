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
        </main>

        <?php include_once 'footer.php' ?>
    </body>
</html>