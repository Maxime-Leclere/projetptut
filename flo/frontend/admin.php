<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once 'head.php' ?>
        <link rel="stylesheet" href="assets/Css/Css.css">
    </head>

    <body>
        <?php
        session_start();

        if($_SESSION['Status'] != 2){
            try {
                header('Location: home.php');

            } catch (Exception $e){}
        }

        include_once 'header.php';
        include_once '../backend/Config.php';

        global $DB;
//        echo'<p class="admin" style="margin-left: 2%; word-spacing: 15px">Nom Prenom Date_de_Naissance Sexe Email Status Numéro_Equipe</p>';
//        echo'<div class="adminNote"><div  id="adminN"><p>Nom </p></div><div  id="adminP"><p>Prenom </p></div><div  id="adminDn"><p>Date_de_Naissance </p></div><div  id="adminSe"><p>Sexe</p></div>
//        <div  id="adminE"><p>Email </p></div><div  id="adminSt"><p>Status </p></div><div  id="adminNe"><p>Numéro_Equipe</p></div></div>';
        echo'<div class="adminNote"><strong>Nom </strong><strong>Prenom </strong><strong>Date_de_Naissance </strong><strong>Sexe</strong><strong>Email </strong><strong>Status </strong><strong>Numéro_Equipe</strong></div>';


        $stmt = $DB->query("Select Nom, Prenom, DateN, Sexe, Email, Status, Num_Equipe from Utilisateur");
        $row = $stmt->fetchAll();


        foreach ($row as $tmp) {
        echo "<div class='container-fluid contenue'>";
//        echo "<div class='container-fluid contenue'style='display: flex; flex-direction: row; font-size: 15px; justify-content: space-around; width: 100%; align-items: center; margin-top: 1%'>";
            for ($i = 0; $i <= count($tmp); $i++) {
            echo "<p class= 'aze' >" . $tmp[$i] . "</p>";
            }
            echo '<form class="form-inline" action="../backend/Cadmin.php" method="post" onsubmit="Equipe()" style="height: 100%; display: flex; flex-direction: row; width: 40%">
                    <input style="visibility: hidden; display: none;" value= ' . $tmp[0] . ' name="idU">
                    <select name="change" class="custom-select mb-6 col-md-4" style="width: 30%">
                        <option value="Status">Status</option>
                        <option value="Email">Email</option>
                        <option value="Num_Equipe">Equipe</option>
                    </select>
                    <input class="form-check-input" type="text" name="tchange">
                    <button type="submit" class="btn btn-warning" >Changer</button>
                    
                </form><a href="#" data-toggle="popover" title="Status: " data-content="0 = non-licencié / 1 = licencié / 2 = admin">Aide</a></div>
                </br>';
        }

        $idu = $_POST['IdU'];
        if ($_SESSION['Status'] == 1 && $_SESSION['Sexe'] = 0) {
            $DB->exec("Update Utilisateur Set IdGroupe = 'y87' where IdUser = '$idu'");
        }


        include_once 'footer.php'?>
    </body>
</html>

<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
    });
</script>