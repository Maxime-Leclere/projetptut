<?php
    // AddComment.php ajoute un commentaire dans la base de donnée

    namespace backend;
    include_once 'Config.php';
    include_once 'Comment.php';
    include_once 'CommentManager.php';
    use \backend\Comment;
    use \backend\CommentManager;

    // on creer le commentaire avec les données du formulaire
    $commentToAdd = new Comment(null, $_POST['username'], $_POST['comment'], null,
        intval($_POST['url']));
    $managerAdd = new CommentManager();
    // on ajoute le commentaire dans la base de donnée
    $managerAdd->add($commentToAdd);
    // on redirige la page vers la page de l'article du commentaire envoyer
    header('Location: ../frontend/article.php?article='.$_POST['url']);
