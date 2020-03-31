<?php

    // AddTournoi.php ajoute un tournoi dans la base de donnée

    include_once 'Config.php';
    // on recupère les données du formulaire
    $name    = $_POST['name'];
    $dateDeb = $_POST['datedeb'];
    $dateFin = $_POST['datefin'];
    $lieu    = $_POST['lieu'];

    // on fait la requete pour ajouter le tournoi dans la base de donnée
    $req = $DB->query("INSERT INTO `TOURNOI`(`Nom_T`, `Date_deb`,
    `Date_fin`, `Lieu`) VALUES ('".addslashes($name)."', '$dateDeb', '$dateFin',
    '".addslashes($lieu)."')");

    // on redirige la page vers la page precedente
    header("Location: ../frontend/adminEvent.php");
