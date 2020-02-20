<?php
    namespace backend;
    include_once 'Config.php';
    include_once 'Comment.php';
    include_once 'CommentManager.php';
    use \backend\Comment;
    use \backend\CommentManager;

    $commentToAdd = new Comment(null, $_POST['username'], $_POST['comment'], null,
        intval($_POST['url']));

    $managerAdd = new CommentManager();
    $managerAdd->add($commentToAdd);

    header('Location: ../frontend/article.php?article='.$_POST['url']);
