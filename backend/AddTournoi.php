<?php
    $name    = addslashes($_POST['name']);
    $dateDeb = $_POST['datedeb'];
    $dateFin = $_POST['datefin'];
    $lieu    = addslashes($_POST['lieu']);

    $req = $DB->query("INSERT INTO `TOURNOI`(`Nom_T`, `Date_deb`, 
    `Date_fin`, `Lieu`) VALUES ('$name', '$dateDeb', '$dateFin', '$lieu')");

    header("Location: ../frontend/adminEvent.php");