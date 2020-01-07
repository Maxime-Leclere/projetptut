<?php
    include_once 'config.php';
    global $DB;
    $title = $_POST['title'];
    $text = $_POST['text'];
    $img_type = null;
    $img_nom  = null;
    $img_blob = null;
    function Transfert() {
        $ret        = false;
        $img_blob   = '';
        $img_taille = 0;
        $img_type   = '';
        $img_nom    = '';
        $taille_max = 250000;
        $ret        = is_uploaded_file($_FILES['fic']['tmp_name']);

        if (!$ret) {
            echo "Problème de transfert";
            return false;
        } else {
            // Le fichier a bien été reçu
            $img_taille = $_FILES['fic']['size'];

            if ($img_taille > $taille_max) {
                echo "Trop gros !";
                return false;
            }
            $img_type = $_FILES['fic']['type'];
            $img_nom  = $_FILES['fic']['name'];
            $img_blob = file_get_contents ($_FILES['fic']['tmp_name']);

            return true;
        }
    }
    if(Transfert()) {
        $req = $DB->query("INSERT INTO `ARTICLES`(`Title_A`, `Text_A`, `Image_A`) VALUES ('$title', '$text', '".addslashes($img_blob)."')");
    } else {
        $req = $DB->query("INSERT INTO `ARTICLES`(`Title_A`, `Text_A`) VALUES ('$title', '$text')");
    }
//    $req->execute();//
    header('Location: home.php');
?>
