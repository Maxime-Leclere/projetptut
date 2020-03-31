<?php
session_start();

define('HOST', 'mysql:host=mysql-projetptut.alwaysdata.net; dbname=projetptut_database;');
define('USER', '195907');
define('PASSWORD', 'Azertyuiop1999');
define('TABLENAME', 'projetptut_database');

$password = $_POST['Mdp'];
$secondpassword = $_POST['MdpS'];
$pdo = new PDO(HOST, USER, PASSWORD );

if ($password == $secondpassword ){
    $newpass = sha1($password);
    $pdo -> exec('Update Utilisateur SET Mdp = ' . '\'' . $newpass .
        '\'' . 'WHERE Email ='
        . '\'' . $_SESSION["Email"] . '\'');
}