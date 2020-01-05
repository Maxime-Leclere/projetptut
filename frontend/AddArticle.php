<?php
    global $DB;

    $req = $DB->query('INSERT INTO ARTICLES(Title_A, Text_A) VALUES (\''.$_POST['title'].'\', \''.$_POST['text'].'\')');
    $req->execute();
    header('Location: home.php');
?>
