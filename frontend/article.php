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
                            <img id="image_comment" src="assets/bulle_perso.png"/>
                            <textarea id="textarea_comment_text" type="text"
                                name="comment" placeholder="Ajouter un commentaire"
                                required></textarea>
                                <script type="text/javascript">
                                    textarea = document.querySelector("#textarea_comment_text");
                                    textarea.addEventListener('input', autoResize, false);

                                    function autoResize() {
                                        this.style.height = 'auto';
                                        this.style.height = this.scrollHeight + 'px';
                                    }
                                </script>
                            <input type="hidden" name="url" value="<?= intval($_GET['article']) ?>" />
                            <input type="hidden" name="username" value="<?= $_SESSION['Nom'].' '.$_SESSION['Prenom'] ?>" />
                            <button id="button_comment" type="submit" name="send_comment" class="btn btn-warning">Ajouter un commentaire</button>
                        </form>
                    </div>
                <?php } ?>
                <div id="list_comment">
                    <?php foreach ($listComment as $comment) { ?>
                        <?= $comment->show() ?>
                    <?php } ?>
                </div>
            </div>
        </div>


        <?php include_once 'footer.php' ?>
    </body>
</html>
