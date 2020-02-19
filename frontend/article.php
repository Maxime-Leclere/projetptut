<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once 'head.php' ?>
    </head>

    <body>
        <?php include_once 'header.php' ?>
        <?php
        require '../backend/ArticleManager.php';
        include "../backend/Config.php";

        use backend\ArticleManager;
        use backend\Article;

        $manager = new ArticleManager();
        $article = $manager->get(intval($_GET['article']));
        ?>

        <div class="container" style="min-height: 770px">
            <?php echo $article->show(); ?>

        </div>


        <?php include_once 'footer.php' ?>
    </body>
</html>
