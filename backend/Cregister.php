<?php
/*
 *Page qui permet de s'enregistrer avec les éléments rentrer dans le formulaire register.php
 * checkEmailHost() est une fonction qui verifie si l'email rentrer est valide en fonction de celle que l'on souhaite pour eviter les emails temporaires
 *
  */
session_start();
$prenom = $_POST['Prenom'];
$nom = $_POST['Nom'];
$email = $_POST['Email'] ;
$password = $_POST['Mdp'] ;
$secondpassword = $_POST['MdpS'] ;
$sexe = $_POST['Sexe'];
$jour = $_POST['jour'];
$mois = $_POST['mois'];
$annee = $_POST['annee'];

define('HOST', 'mysql:host=mysql-projetptut.alwaysdata.net; dbname=projetptut_database;');
define('USER', '195907');
define('PASSWORD', 'Azertyuiop1999');
define('TABLENAME', 'projetptut_database');

$pdo = new PDO(HOST, USER, PASSWORD );

function checkEmailHost($email)
{
    $array = array(
        "1" => "@gmail.com",
        "2" => "@yahoo.fr",
        "3" => "@hotmail.fr",
        "4" => "@laposte.net",
        "5" => "@etu.univ-amu.fr",
        "6" => "@univ-amu.fr",
    );

    $strstrEmail = strstr($email, '@');
    for ($i = 1; $i <= count($array); $i++) {
        if ($strstrEmail == $array[$i]) {
            return true;
            break;
        } else if ($i== count($array)) {
            return false;
        }

    }
}

$idSexe = "";
if($sexe == "homme")
{
    $idSexe = '1';
} else {
    $idSexe = '0';
}

$date = $annee . '-' . $mois . '-' . $jour;


if (checkEmailHost($email) && ($password == $secondpassword )){
    if(strlen($password) > 9) {
        $password = sha1($password);
        $pdo->exec("INSERT INTO Utilisateur (Nom, Prenom, DateN, Sexe, Mdp, Email) VALUES ('$nom','$prenom','$date','$idSexe','$password','$email')");
        header('Location: ../frontend/home.php');
    }else{

        $_SESSION['Pdwc'] = "court";
        header('Location: ../frontend/register.php');

    }
}
else{
    $_SESSION['Adri']= "invalid";
    header('Location: ../frontend/register.php');
}

// changer chemin apres
header('Location: ../frontend/home.php');

?>
