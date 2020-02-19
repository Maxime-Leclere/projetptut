<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once 'head.php' ?>
    </head>

    <body>
        <?php include_once 'header.php' ?>
        <?php
        include_once '../backend/ArticleManager.php';
        include_once '../backend/Article.php';
        include "../backend/Config.php";

        use backend\ArticleManager;
        use backend\Article;
        if($_GET['article'] == null)header('Location: home.php');

        $manager = new ArticleManager();
        $article = $manager->get(intval($_GET['article']));
        ?>

        <div class="container" style="min-height: 770px">
            <?php echo $article->show(); ?>

        </div>


        <?php include_once 'footer.php' ?>
    </body>
</html>
