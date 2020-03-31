<?php
// connexion avec la base de donnée
try {
        $DB = new \PDO('mysql:host=mysql-projetptut.alwaysdata.net;dbname=projetptut_database;',
            '195907', 'Azertyuiop1999');
    } catch (PDOException $e) {
        echo 'base de donnée totalement bugger(connexion à la base de donnée echoué)';
        exit();
    }
