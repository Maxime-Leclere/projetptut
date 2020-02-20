<?php
    include_once 'Config.php';

    $commentToAdd = new Comment(, $_POST['username'], $_POST['comment'], ,
        intval($_POST['url']));

    $managerAdd = new CommentManager();
    $managerAdd->add($commentToAdd);

    header('Location: ./frontend/article.php?article='.$_POST['url']);
