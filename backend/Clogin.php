<?php
session_start();

define('HOST', 'mysql:host=mysql-projetptut.alwaysdata.net; dbname=projetptut_database;');
define('USER', '195907');
define('PASSWORD', 'Azertyuiop1999');
define('TABLENAME', 'projetptut_database');

$pdo = new PDO(HOST, USER, PASSWORD );

$email = $_POST['Email'];
$password = $_POST['Mdp'] ;
$password =sha1($password);

$stmt = $pdo->query("Select * from Utilisateur Where Email = '$email' AND Mdp = '$password'");
$row = $stmt->fetch();

if(empty ($row )) {
    print_r("tu n'as pas de compte ");
    header ("Refresh: 2;URL=/../login.php");

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
    header('Location: /../Test.php');

}

//if(!isset($_SESSION['login']))
//{
//    header("Location: ../login.php");
//    exit;
//}


?>

