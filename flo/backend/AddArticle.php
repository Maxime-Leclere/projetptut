<?php
    // AddArticle.php ajoute un articles dans la base de donnée
    include_once 'Config.php';

    /*
    * teste si l'article peut être inserer dans la base de donnée
    */
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
    // si on peut inserer dans la base de donnée l'article alors on fait la requete
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
    // on redirige la page vers l'acceuil
    header('Location: ../frontend/home.php');
