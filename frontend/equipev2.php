<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <?php include_once 'head.php' ?>
  <link rel="stylesheet" href="assets/Css/style_equipe.css">
  <?php
    include_once '../backend/getEquipe.php';
    include_once '../backend/Config.php';
    include_once '../backend/equipeTest.php';
    ?>
</head>

<body>
  <?php include_once 'header.php';?>
  <div class="toggle_btn">
    <span></span>
  </div>

  <div class="menu nav">
    <a href="#" class="logo"> Liste d'équipe </a>

    <!-- crée un objet Equipe qui va servir à accéder au équipe enregistrer -->
    <?php
          $Equipe= new Equipe();
          $data = $Equipe->getEquipe();
          ?>
    <!-- Affiche le nom d'equipe dans un menu est redirige la valeur de nom d'equipe en cas de clique -->
    <?php foreach ($data as $element) {
      echo '<a href="equipev2.php?name='.$element['Nom_Equipe'].'" id="equip" > '.$element['Nom_Equipe'].' </a>';
     } ?>


  </div>
  <!-- va afficher la page de l'equipe par rapport a l'equipe selectionner plut haut -->
  <!-- met n'est pas terminer pour cause de soucis technique  -->
  <!-- nous avons la juste le test -->
  <p > variable =<?php $nom=$_GET["name"];
    echo $nom;?></p>
  <div> <?php $EquipeBody= new EquipeBody();
            $data = $EquipeBody->Show($nom);
            echo'<div >
                <h2>cdcdc'.$data['Nom_Equipe'].'</h2>
                </div>'?>

          </div>


  <!-- <script type="text/javascript" src="assets/Css/equipe.js"></script> -->
</body>
</html>
