<?php
    include_once 'config.php';
    global $DB;
    $title = $_POST['title'];
    $text = $_POST['text'];
    $req = $DB->query("INSERT INTO `ARTICLES`(`Title_A`, `Text_A`) VALUES ('$title', '$text')");
//    $req->execute();//
    header('Location: home.php');
?>
