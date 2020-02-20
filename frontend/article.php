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
            <?= $article->show() ?>
            <h4 class="title_listcomment"><?= sizeof($listComment)?> Commentaire
                <?php if(sizeof($listComment) > 1) echo "s" ?>
            </h4>
            <?php if ($_SESSION["Status"] != 0){?>
                <form action="" method="post">
                    <input type="text" name="comment" placeholder="Ajouter un
                    commentaire" required/>
                    <input type="hidden" name="url" value="
                    <?= intval($_GET['article']) ?>" />
                    <input type="hidden" name="username" value="
                    <?= $_SESSION['Nom'].' '.$_SESSION['Prenom'] ?>" />
                    <button type="submit" name="send_comment">Envoyer</button>
                </form>
            <?php } ?>
            <?php foreach ($listComment as $comment) { ?>
                <?= $comment->show() ?>
            <?php } ?>
        </div>


        <?php include_once 'footer.php' ?>
    </body>
</html>
