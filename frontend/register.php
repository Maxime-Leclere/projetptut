<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'head.php' ?>
</head>

<body>
<?php include_once 'header.php' ?>

<div class="container" style="height: 100%"><br>
    <form action="../backend/Cregister.php" method="post">
        <div class="form-group">
            <label for="prenom">Prenom:</label>
            <input type="text" class="form-control" placeholder="Entrer prenom" id="prenom" name="Prenom">
        </div>
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" placeholder="Entrer nom" id="nom" name="Nom">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="Enter email" id="email" name="Email">
        </div>
        <label for="sele" class="col-md-4">Sélectionner votre sexe:</label>
        <label for="date_naissance" class="col-md-4" style="margin-left: 10%">Date de naissance: </label><br>
        <div style="flex-direction: row; display: flex; ">
            <select name="Sexe" class="custom-select mb-6 col-md-4" style="width: 30%">
                <option value="femme">Femme</option>
                <option value="homme">Homme</option>
            </select>
            <div style="width: 30%; display: flex; flex-direction: row; margin-left: 10%">
                <select class="custom-select" name="jour">
                    <option value="0">Jour</option>
                    <?php
                    for ($i = 1; $i <= 31; $i++)
                    {
                        echo '<option value="' . $i . '">' . $i . '</option>';
                    }
                    ?>
                </select>

                <select class="custom-select" name="mois" size="1" >
                    <option value="00">Mois</option><option value="01">Janvier</option><option value="02">Février</option><option value="03">Mars</option><option value="04">Avril</option><option value="05">Mai</option><option value="06">Juin</option><option value="07">Juillet</option><option value="08">Août</option><option value="09">Septembre</option><option value="10">Octobre</option><option value="11">Novembre</option><option value="12">Décembre</option>
                </select>

                <select class="custom-select " name="annee" >
                    <option value="0">Année</option>
                    <?php
                    for ($i = 2020; $i >= 1940; $i--)
                    {
                        echo '<option value="' . $i . '">' . $i . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Mot de passe:</label>
            <input type="password" class="form-control" placeholder="Entrer mot de passe" id="pwd" name="Mdp">
        </div>
        <div class="form-group">
            <label for="pwd">Confirmez vôtre mot de passe:</label>
            <input type="password" class="form-control" placeholder="Entrer mot de passe" id="pwd" name="MdpS">
        </div>

        <button type="submit" class="btn btn-warning">S'inscrire</button>
    </form>
</div>


<?php include_once 'footer.php' ?>
</body>
</html>

