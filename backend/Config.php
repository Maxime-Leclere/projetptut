<?php

try {
        $DB = new \PDO('mysql:host=mysql-projetptut.alwaysdata.net;dbname=projetptut_database;',
            '195907', 'Azertyuiop1999');
    } catch (PDOException $e) {
        echo 'base de donner totalement bugger';
        exit();
    }
