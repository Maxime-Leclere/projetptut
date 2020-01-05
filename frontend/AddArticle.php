<?php
    global $DB;

    $req = $DB->query("INSERT INTO ARTICLES(Title_A, Text_A) VALUES ("."'".$_POST['Title']."'".", "."'".$_POST['Text']."'".")");
    $req->execute();
    header('Location: home.php');
?>
