<?php
    try {
        $DB = new PDO('mysql:host=mysql-projetptut.alwaysdata.net;dbname=projetptut_database;',
            '195907', 'Azertyuiop1999');
        $GLOBALS['basededonne'] = $DB;
    } catch (PDOException $e) {
        echo 'base de donner totalement bugger';
        exit();
    }
?>