<?php

session_start();

function hearder_contenue()
{
    echo '<div class="modal fade" id="connexion">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Se connecter</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="">
                <div class="container" style="height: 100%"><br>
                    <form action="../backend/Clogin.php" method="post">
                        <div class="form-group">
                            <label for="email">Entrer votre adresse Email:</label>
                            <input type="email" class="form-control" placeholder="Email" id="email" name="Email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Entrer votre mot de passe:</label>
                            <input type="password" class="form-control" placeholder="Mot de Passe" id="pwd" name="Mdp">
                        </div>

                        <button type="submit" name="formconnexion" class="btn btn-warning">Se connecter</button>
                    </form>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Fermer</button>
            </div>

        </div>
    </div>
</div>




<div class="modal fade" id="co123">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Mon profil</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="">
                <table class="table" style="width: 100%">
                    <thead class="thead-dark">
                    <tr>
                        <th>Prenom</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>';
    echo $_SESSION["Prenom"];
    echo'</td>
                    </tr>
                    </tbody>
                    <thead class="thead-dark">
                    <tr>
                        <th>Nom</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>';
    echo $_SESSION["Nom"];
    echo '</td>
                    </tr>
                    </tbody>
                    <thead class="thead-dark">
                    <tr>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>';
    echo  $_SESSION["Email"];
    echo '</td>
                    </tr>
                    </tbody>
                    <thead class="thead-dark">
                    <tr>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>';if ($_SESSION["Status"] == 0) {
    echo 'Non - licencié';
} else if ($_SESSION["Status"] == 1)  {
    echo 'Licencié';
}
else if ($_SESSION["Status"] == 2){
    echo 'Administrateur';
} echo'</td>
                    </tr>
                    </tbody>
                    <thead class="thead-dark">
                    <tr>
                        <th> Date de naissance </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td> ';
    echo $_SESSION["DateN"] ;
    echo'</td>
                    </tr>
                    </tbody>
                    <thead class="thead-dark">
                    <tr>
                        <th> Equipe </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td> ';
    echo $_SESSION["NomE"] ;
    echo '</td>
                    </tr>
                    </tbody>
                </table>

            </div>

            <div class="modal-footer">';
    if($_SESSION['Status'] == 2 ) {
        echo ' 
                    <form action = "adminEvent.php" method = "post" >
                    <button type = "submit"class="btn btn-warning" > Evènement </button >
                </form >
                    <form action = "admin.php" method = "post" >
                    <button type = "submit"class="btn btn-warning" > Page administrateur </button >
                </form >
                <form action = "email.php" method = "post" >
                    <button type = "submit"class="btn btn-warning" > Email</button >
                </form >';

    }
    echo'<button type="button" class="btn btn-warning" data-dismiss="modal">Fermer</button>

            </div>

        </div>
    </div>
</div>';

}?>