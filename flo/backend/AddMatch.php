<?php
    // AddMatch.php ajoute un match dans la base de donnée

    include_once 'Config.php';

    // on recupère les données du formulaire
    $date   = $_POST['date'];
    $time   = $_POST['time'].':00';
    $nameCA = $_POST['nameCA'];
    $lieu   = $_POST['lieu'];
    $numT   = $_POST['numT'];

    // on fait la requete pour ajouter le match dans la base de donnée 
    $req = $DB->query("INSERT INTO `MATCHS`(`Date_M`, `Heure`, `Club_Adversaire`, `Lieu`,
            `Num_T`) VALUES ('$date', '$time', '".addslashes($nameCA)."', '".addslashes($lieu)."', $numT)");
    // on redirige la page vers la page precedente
    header("Location: ../frontend/adminEvent.php");
