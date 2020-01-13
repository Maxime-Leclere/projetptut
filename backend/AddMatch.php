<?php
    include_once 'Config.php';

    $date   = $_POST['date'];
    $time   = $_POST['time'].':00';
    $nameCA = $_POST['nameCA'];
    $lieu   = $_POST['lieu'];
    $numT   = $_POST['numT'];

    $req = $DB->query("INSERT INTO `MATCHS`(`Date_M`, `Heure`, `Club_Adversaire`, `Lieu`, 
            `Num_T`) VALUES ('".str_replace(" 00:00:00","","".$date."")."', '$time', '".addslashes($nameCA)."', '".addslashes($lieu)."', $numT)");

    header("Location: ../frontend/adminEvent.php");