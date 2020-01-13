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


//&& $_SESSION['DateN'] < 2005/01/01 && $_SESSION['DateN'] > 2000/01/01
header('Location: ../frontend/admin.php')?>