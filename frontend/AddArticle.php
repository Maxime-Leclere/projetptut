<?php
    include_once 'config.php';

    function Transfert() {
        global $DB;
        $title = $_POST['title'];
        if(isset($_POST['text'])) {
            $text = $_POST['text'];
        } else {
            $text = "";
        }
        $ret = is_uploaded_file($_FILES['image']['tmp_name']);
        if (!$ret) {
            echo "Problème de transfert";
            return false;
        } else {
            $tmp_name = $_FILES['image']["tmp_name"];
            $name = basename($_FILES["image"]["name"]);
            $destinationFinal = "assets/image_article/$name";
            move_uploaded_file($tmp_name, "$destinationFinal");
            $DB->exec("INSERT INTO `ARTICLES`(`Title_A`, `Text_A`, `Image_A`) VALUES ('".
                addslashes($title)."', '".addslashes($text)."', '$destinationFinal')");
            return true;
        }
    }

    if(!Transfert()) {
        global $DB;
        $title = $_POST['title'];
        if(isset($_POST['text'])) {
            $text = $_POST['text'];
        } else {
            $text = "";
        }
        $req = $DB->exec("INSERT INTO `ARTICLES`(`Title_A`, `Text_A`) VALUES ('".
            addslashes($title)."', '".addslashes($text)."')");
    }
    header('Location: home.php');

