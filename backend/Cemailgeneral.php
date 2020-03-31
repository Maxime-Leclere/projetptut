<?php
session_start();
/*Permet de récuperer les adresses email dans la base de donner
 * Envoie ensuite le mail avec la fonction mail()
 * $tmp[5] correspond a la 5eme colonne de la Bd où sont les email
 */
include_once 'Config.php';
$topost = $_POST['equipe'];
$postall= $_POST['Status'];

global $DB;

$stmt = $DB->query("Select * from Utilisateur");
$row = $stmt->fetchAll();

foreach ($row as $tmp) {
    mail($tmp[5], $_POST['tete'], $_POST['contenue']);
}

//header('Location: ../backend/email.php');
?>