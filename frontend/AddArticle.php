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
        $taille_max = 250000;
        $ret        = is_uploaded_file($_FILES['image']['tmp_name']);

        if (!$ret) {
            echo "Problème de transfert";
            return false;
        } else {
            // Le imagehier a bien été reçu
            $img_taille = $_FILES['image']['size'];

            if ($img_taille > $taille_max) {
                echo "Trop gros !";
                return false;
            }
            $tmp_name = $_FILES['image']["tmp_name"];
            $name = basename($_FILES["image"]["name"]);
            $destinationFinal = "assets/image_article/$name";
            move_uploaded_file($tmp_name, "$destinationFinal");
            $DB->exec("INSERT INTO `ARTICLES`(`Title_A`, `Text_A`, `Image_A`) VALUES ('$title', '$text', '$destinationFinal')");
            return true;
        }
    }

    if(!Transfert()) {
        global $DB;
        $title = $_POST['title'];
        $text = $_POST['text'];
        $req = $DB->exec("INSERT INTO `ARTICLES`(`Title_A`, `Text_A`) VALUES ('$title', '$text')");
    }
    header('Location: home.php');

