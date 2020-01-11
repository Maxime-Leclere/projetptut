<?php
session_start();


$email = $_POST['Email'];
$password = $_POST['Mdp'] ;
$password =sha1($password);

include_once 'Config.php';

global $DB;

$stmt = $DB->query("Select * from Utilisateur Where Email = '$email' AND Mdp = '$password'");
$row = $stmt->fetch();

if(empty ($row )) {
    print_r("tu n'as pas de compte ");
    header ("Refresh: 2;URL=/../frontend/home.php");

}
else
{
    $_SESSION['IdUser'] = $row['IdUser'];
    $_SESSION['Nom'] = $row['Nom'];
    $_SESSION['Prenom'] = $row['Prenom'];
    $_SESSION['DateN'] = $row['DateN'];
    $_SESSION['Sexe'] = $row['Sexe'];
    $_SESSION['Email'] = $row['Email'];
    $_SESSION['Mdp'] = $row['Mdp'];
    $_SESSION['Status'] = $row['Status'];
    $_SESSION['Num_Equipe'] = $row['Num_Equipe'];
    $_SESSION['login'] = "ok";
    header('Location: ../frontend/home.php');

}

//if(!isset($_SESSION['login']))
//{
//    header("Location: ../login.php");
//    exit;
//}


?>

