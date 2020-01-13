<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once 'head.php' ?>
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
        $stmt = $DB->query("Select * from Utilisateur");
        $row = $stmt->fetchAll();


        foreach ($row as $tmp) {
        echo "<div class='container-fluid' style='display: flex; flex-direction: row; font-size: 15px; justify-content: space-around; width: 100%; align-items: center; margin-top: 1%'>";
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
                </form></div></br>';
        }

        $idu = $_POST['IdU'];
        if ($_SESSION['Status'] == 1 && $_SESSION['Sexe'] = 0) {
            $DB->exec("Update Utilisateur Set IdGroupe = 'y87' where IdUser = '$idu'");
        }


        include_once 'footer.php'?>
    </body>
</html>