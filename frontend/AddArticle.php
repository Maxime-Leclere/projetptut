<?php
    include_once 'config.php';
    global $DB;
    $title = $_POST['title'];
    $text = $_POST['text'];
    $img_blob = file_get_contents ($_FILES['image']['tmp_name']);
    function Transfert() {
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
            echo 'renvoie true';
            return true;
        }
    }
    if(Transfert()) {
        $req = $DB->query("INSERT INTO `ARTICLES`(`Title_A`, `Text_A`, `Image_A`) VALUES ('$title', '$text', '".addslashes($img_blob)."')");
    } else {
        echo 'requete';
        $req = $DB->exec("INSERT INTO `ARTICLES`(`Title_A`, `Text_A`) VALUES ('$title', '$text')");
        echo'fn requete';
    }
    header('Location: home.php');
?>
