<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once 'head.php' ?>
    </head>

    <body>
        <?php include_once 'header.php' ?>
        <?php
        include_once '../backend/ArticleManager.php';
        include_once '../backend/CommentManager.php';
        include_once '../backend/Article.php';
        include_once '../backend/Comment.php';
        include "../backend/Config.php";

        use backend\ArticleManager;
        use backend\Article;
        use backend\CommentManager;
        use backend\Comment;
        if($_GET['article'] == null)header('Location: home.php');

        $managerA = new ArticleManager();
        $managerC = new CommentManager();
        $article = $managerA->get(intval($_GET['article']));
        $listComment = $managerC->getFromArticle(intval($_GET['article']));
        ?>

        <div class="container" style="min-height: 770px">
            <?php echo $article->show(); ?>
            <?php if ($_SESSION["Status"] == 1){?>
                <form action="" method="post">
                    <input type="text" name="comment" placeholder="Ajouter un
                        commentaire" required/>
                </form>
            <?php } ?>
        </div>


        <?php include_once 'footer.php' ?>
    </body>
</html>
