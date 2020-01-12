<?php
session_start();

include_once 'Config.php';
$topost = $_POST['equipe'];
$postall= $_POST['Status'];

global $DB;

$stmt = $DB->query("Select * from Utilisateur where Num_Equipe = '$topost'");
$row = $stmt->fetchAll();
//$row = $stmt->fetchAll();

foreach ($row as $tmp) {
    mail($tmp[5], $_POST['tete'], $_POST['contenue']);
}

?>