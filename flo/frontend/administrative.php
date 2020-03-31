<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once 'head.php' ?>
    </head>

    <body>
        <?php include_once 'header.php' ?>

        <div class="container" style="min-height: 770px">
            <h2>Administration</h2>
            <br>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#organi">ORGANIGRAMME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Hentr">HORAIRES ENTRAÎNEMENTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gymnase">NOTRE GYMNASE</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="organi" class="container tab-pane active"><br>
                    <h3>ORGANIGRAMME</h3>
                    <img class="rounded mx-auto d-block" src="assets/Img/Organi.jpg"><br>
                    <button type="button" class="btn btn-warning rounded mx-auto d-block" data-toggle="collapse" data-target="#en">Liste des Entraîneurs 2019/2020 :</button><br>
                    <div id="en" class="collapse">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Entraineur</th>
                                <th>Equipe</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td> Ulrich N’GOUADOUNGA</td>
                                <td>Ecole de volley M7-M9 Garçons et Filles</td>
                            </tr>
                            <tr>
                                <td> Jérôme ALEMAN</td>
                                <td>M9-M11 Garçons et Filles</td>
                            </tr>
                            <tr>
                                <td>Ulrich N’GOUADOUNGA</td>
                                <td>M11-M13 Garçons et Filles</td>
                            </tr>
                            <tr>
                                <td>Ulrich N’GOUADOUNGA</td>
                                <td>M13-M15 Garçons</td>
                            </tr>
                            <tr>
                                <td>Joris HARIOT</td>
                                <td>M15-M17 Garçons </td>
                            </tr>
                            <tr>
                                <td> Julien CUGINI et Johanne SAME</td>
                                <td>M13-M15-M17-M20 filles </td>
                            </tr>
                            <tr>
                                <td> Julien CUGINI</td>
                                <td>Départementale filles</td>
                            </tr>
                            <tr>
                                <td> Ulrich N’GOUADOUNGA et Julien CUGINI</td>
                                <td>Régionale garçons </td>
                            </tr>
                            <tr>
                                <td> Ulrich N’GOUADOUNGA</td>
                                <td>Régionale filles </td>
                            </tr>
                            <tr>
                                <td>Patrick BELLIER</td>
                                <td>Pré-nationale garçons</td>
                            </tr>
                            <tr>
                                <td> Frédéric LOCQUENEUX</td>
                                <td>Nationale 2 garçons </td>
                            </tr>
                            <tr>
                                <td> Olivier FORTOUL</td>
                                <td>FSGT1</td>
                            </tr>
                            <tr>
                                <td> FSGT2</td>
                                <td>Lucas GILLY </td>
                            </tr>
                            <tr>
                                <td> Loisirs </td>
                                <td>Antoine BOBIN</td>
                            </tr>
                            </tbody>
                        </table><br>
                    </div>
                </div>
                <div id="Hentr" class="container tab-pane fade"><br>
                    <h3>HORAIRES ENTRAÎNEMENTS</h3>
                    <img src="assets/Img/horaire-entrainement.png" style="width: 90%"><br>
                    <p><a href="assets/Img/Planning-V8-ENTRAINEMENT-AUC13VB-2019-20.pdf" title="Pdf">     Télécharger le en pdf</a></p><br>

                </div>
                <div id="gymnase" class="container tab-pane fade"><br>
                    <h3>NOTRE GYMNASE</h3>
                    <p>Pour nous retrouver voici l’adresse du Gymnase</p>
                    <h4>Adresse</h4>
                    <p>Gymnase Halle Carcassonne<br>
                        Rue Pierre de Coubertin<br>
                        13100 Aix en Provence</p>
                    <img  class="rounded mx-auto d-block" src="assets/Img/gymnase.jpg"><br>
                    <iframe class="rounded mx-auto d-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d817.7098692551864!2d5.46241533224704!3d43.52272304352942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDPCsDMxJzIxLjciTiA1wrAyNyc0Ni43IkU!5e0!3m2!1sfr!2sfr!4v1577721216025!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe><br>


                </div>
            </div>
        </div>

        <script>
            $(document).ready(function(){
                $(".nav-tabs a").click(function(){
                    $(this).tab('show');
                });
            });
        </script>


        <?php include_once 'footer.php' ?>
    </body>
</html>