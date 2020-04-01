<?php
/*
 *Permet d'envoyer par mail un mot de passe aleatoire si on l'as oublié
 *
  */
session_start();

/**
 * Crée un mot de passe aléatoire
 * Il enverra un mail avec le nouveau mot de passe dans le mail rentrer dans le formulaire
 *
 */

function randPassword($length)
{
    $passgen = null;
    for ($i = 1; $i<$length; ++$i) {
        $passgen .= chr(rand(46, 125));
    }
    return $passgen;
}
define('HOST', 'mysql:host=mysql-projetptut.alwaysdata.net; dbname=projetptut_database;');
define('USER', '195907');
define('PASSWORD', 'Azertyuiop1999');
define('TABLENAME', 'projetptut_database');

$email = $_POST['email'];
$pdo = new PDO(HOST, USER, PASSWORD );


$stmt = $pdo -> query('Select Email from Utilisateur Where Email = \'' . $email . '\' ');
$row = $stmt->fetch();
print_r($row);


if ($row > 1) {
    $newPass = randPassword('10');


        mail(
        $email,
        'Changement de mot de passe',
        'Voici votre nouveau mdp ' . $newPass
    );
    $newPass2 = sha1($newPass);
    $pdo -> exec('Update Utilisateur SET Mdp = ' . '\'' . $newPass2 .
        '\'' . 'WHERE Email ='
        . '\'' . $email . '\'');
    print_r("yo");
}

$_SESSION['MailSend'] = "whynot";
unset($_POST['email']);
header('Location: /../frontend/forgetpassword.php');
exit();
