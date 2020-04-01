<?php
session_start();
/*
 * Permet de se connecter
 * Il récupère le proil en fonction de du mail et du mdp rentrer et initialise la session de l'utilisateur correspondant
 */
include_once 'Config.php';

global $DB;
$email = $_POST['Email'];
$password = $_POST['Mdp'] ;
$password =sha1($password);

$stmt = $DB->query("Select * from Utilisateur Where Email = '$email' AND Mdp = '$password'");
$row = $stmt->fetch();

if(empty ($row )) {
    echo '<div class="alert alert-danger">
            <strong>Vous n\'avez pas de compte!</strong> Merci de vérifiez votre mot de passe ou votre adresse e-mail.
            </div>';
    header ("Refresh: 4;URL=/../frontend/register.php");

}
else
{
    $_SESSION['IdUser'] = $row['IdUser'];
    $_SESSION['Nom'] = $row['Nom'];
    $_SESSION['Prenom'] = $row['Prenom'];
    $_SESSION['DateN'] = $row['DateN'];
    $_SESSION['Sexe'] = $row['Sexe'];
    $_SESSION['Email'] = $row['Email'];
    $_SESSION['Mdp'] = $row['Mdp'];
    $_SESSION['Status'] = $row['Status'];
    $_SESSION['Num_Equipe'] = $row['Num_Equipe'];
    $_SESSION['login'] = "ok";
    header('Location: /../frontend/home.php');

}

$stmt = $DB->query("Select * from Equipe");
$vector = $stmt->fetchAll();

foreach($vector as $row)
{
    $DateNmin = $row['DateNmin'];
    $DateNmax = $row['DateNmax'];
    $IdE = $row['Num_Equipe'];
    $SexeE = $row['Sexe'];
    $NomE = $row['Nom_Equipe'];

    if (($_SESSION["Status"] == 1 || $_SESSION["Status"] == 2) && $_SESSION['DateN'] > $DateNmax && $_SESSION['DateN'] < $DateNmin  && $SexeE == $_SESSION['Sexe']) {

        $DB->exec("Update Utilisateur SET  Num_Equipe = " . $IdE . " Where IdUser = " . $_SESSION['IdUser']);
        $_SESSION['NomE']= $NomE;
    }//Permet d'attribuer une équipe en fonction de l'age et du genre, Il faut obligatoirement avoir un STatus 1 ou 2 pour pouvoir une équipe
}


