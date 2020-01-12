<?php
session_start();

$topost = $_POST['equipe'];
$postall= $_POST['Status'];

define('HOST', 'mysql:host=mysql-projetptut.alwaysdata.net; dbname=projetptut_database;');
define('USER', '195907');
define('PASSWORD', 'Azertyuiop1999');
define('TABLENAME', 'projetptut_database');

$pdo = new PDO(HOST, USER, PASSWORD);

$stmt = $pdo->query("Select * from Utilisateur where Num_Equipe = '$topost'");
$row = $stmt->fetchAll();
//$row = $stmt->fetchAll();

foreach ($row as $tmp) {
    mail($tmp[5], $_POST['tete'], $_POST['contenue']);
}

?>