<?php
    include_once 'Config.php';

    $name    = $_POST['name'];
    $dateDeb = $_POST['datedeb'];
    $dateFin = $_POST['datefin'];
    $lieu    = $_POST['lieu'];

    $req = $DB->query("INSERT INTO `TOURNOI`(`Nom_T`, `Date_deb`,
    `Date_fin`, `Lieu`) VALUES ('".addslashes($name)."', '$dateDeb', '$dateFin', 
    '".addslashes($lieu)."')");

    header("Location: ../frontend/adminEvent.php");