<?php
    $name    = $_POST['name'];
    $dateDeb = $_POST['datedeb'];
    $dateFin = $_POST['datefin'];
    $lieu    = $_POST['lieu'];

    var_dump($name);
    var_dump($dateDeb);
    var_dump($dateFin);
    var_dump($lieu);
    $req = $DB->query("INSERT INTO `TOURNOI`(`Nom_T`, `Date_deb`,
    `Date_fin`, `Lieu`) VALUES ('".addslashes($name)."', '$dateDeb', '$dateFin', 
    '".addslashes($lieu)."')");

    header("Location: ../frontend/adminEvent.php");