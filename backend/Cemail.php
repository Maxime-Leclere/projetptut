<?php

echo $_POST['contenue'];
echo '<br><hr>';
echo $_POST['tete'];
echo '<br><hr>';
echo $_POST['equipe'];
echo '<br><hr>';

$topost = "'" . $_POST['equipe'] . "'";

define('HOST', 'mysql:host=mysql-projetptut.alwaysdata.net; dbname=projetptut_database;');
define('USER', '195907');
define('PASSWORD', 'Azertyuiop1999');
define('TABLENAME', 'projetptut_database');

$pdo = new PDO(HOST, USER, PASSWORD);



print_r("Select * from Utilisateur where Num_Equipe = '3'");

$stmt = $pdo->exec("Select * from Utilisateur where Num_Equipe = 3");
$row = $stmt->fetchAll();
//$row = $stmt->fetchAll();

print_r($row);
//print_r($row[1]);


//foreach ($row as $tmp) {
//}

?>