<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<?php
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
//$stm = $pdo->prepare("SELECT * FROM Utilisateur");
//$stm->execute();
//
//$row = $stm->fetch(PDO::FETCH_ASSOC);
//foreach($row as $temp) {
//
//    printf("$temp[0] $temp[1] $temp[2]\n");
//}
//'\',\'' . 'DD/MM/YYYY')
//$pdo->exec('INSERT INTO Utilisateur (Nom, Prenom, DateN) VALUES (\'' .$nom .'\',\'' . $prenom.'\',\'' . $temp .'\');');

$date = $annee . '-' . $mois . '-' . $jour;


if (checkEmailHost($email) && ($password == $secondpassword )){
    $password = sha1($password);
    print_r($password);
    $pdo->exec("INSERT INTO Utilisateur (Nom, Prenom, DateN, Sexe, Mdp, Email) VALUES ('$nom','$prenom','$date','$idSexe','$password','$email')");
    echo '<div class="alert alert-success">
    <strong>Adresse email valide!</strong>
  </div>';
}
else{
    echo '<div class="alert alert-danger">
    <strong>Adresse email invalide!</strong> Veuillez rentrer une adresse correcte.
  </div>';
}

header('Location: /../login.php');

?>
