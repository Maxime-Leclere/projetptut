<!DOCTYPE html>
<html lang="fr">
    <head>
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

        $managerA = new ArticleManager();
        $managerC = new CommentManager();
        $article = $managerA->get(intval($_GET['article']));
        if(is_null($article)) {
            header('Location: home.php');
        }

        include_once 'head.php' ?>
    </head>

    <body>
        <?php include_once 'header.php' ?>
        <?php
        $listComment = $managerC->getFromArticle(intval($_GET['article']));
        ?>

        <div class="container" style="min-height: 770px">
            <?= $article->show() ?>
            <div class="space_comment">
                <h4 class="title_listcomment"><?= sizeof($listComment)?> Commentaire<?php if(sizeof($listComment) > 1) echo "s" ?>
                </h4>
                <?php if ($_SESSION["Status"] != 0){?>
                    <div class="form_comment">
                        <form action="../backend/AddComment.php" method="post">
                            <input id="input_comment_text" type="text" name="comment" placeholder="Ajouter un commentaire" required/>
                            <input type="hidden" name="url" value="<?= intval($_GET['article']) ?>" />
                            <input type="hidden" name="username" value="<?= $_SESSION['Nom'].' '.$_SESSION['Prenom'] ?>" />
                            <button type="submit" name="send_comment" class="btn btn-warning">Envoyer</button>
                        </form>
                    </div>
                <?php } ?>
                <?php foreach ($listComment as $comment) { ?>
                    <?= $comment->show() ?>
                <?php } ?>
            </div>
        </div>


        <?php include_once 'footer.php' ?>
    </body>
</html>
