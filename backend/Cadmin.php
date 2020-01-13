<?php
define('HOST', 'mysql:host=mysql-projetptut.alwaysdata.net; dbname=projetptut_database;');
define('USER', '195907');
define('PASSWORD', 'Azertyuiop1999');
define('TABLENAME', 'projetptut_database');

$pdo = new PDO(HOST, USER, PASSWORD );
$change = $_POST['change'];
$tchange = $_POST['tchange'];
$idu = $_POST['idU'];


$pdo->exec("Update Utilisateur SET " . $change . " = '$tchange' where IdUser = '$idu'");


function Equipe(){
    $pdo = new PDO(HOST, USER, PASSWORD );
    $idu = $_POST['IdU'];
    if( $_SESSION['Status'] == 1  || $_SESSION['Status'] == 2 && $_SESSION['Sexe'] = 0 ){
        $pdo->exec("Update Utilisateur Set IdGroupe = 'y87' where IdUser = '18'");
    }
    if( $_SESSION['Status'] == 1  || $_SESSION['Status'] == 2 && $_SESSION['Sexe'] = 1 ){
        $pdo->exec("Update Utilisateur SET IdGroupe = 'U15' where IdUser = '$idu'");
    }

}

//&& $_SESSION['DateN'] < 2005/01/01 && $_SESSION['DateN'] > 2000/01/01
header('Location: /../frontend/admin.php')?>