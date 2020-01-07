<?php
    include_once 'config.php';
    global $DB;
    $title = $_POST['title'];
    $text = $_POST['text'];
    $img_blob = '';
    function Transfert($img_blob) {
        $ret        = false;
        $img_taille = 0;
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
            $img_blob .= file_get_contents ($_FILES['image']['tmp_name']);
            echo 'renvoie true';
            return true;
        }
    }
    if(Transfert($img_blob)) {
        $req = $DB->query("INSERT INTO `ARTICLES`(`Title_A`, `Text_A`, `Image_A`) VALUES ('$title', '$text', '$img_blob')");
    } else {
        $req = $DB->query("INSERT INTO `ARTICLES`(`Title_A`, `Text_A`) VALUES ('$title', '$text')");
    }
//    header('Location: home.php');
?>
