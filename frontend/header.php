<header>
    <?php include_once 'boutdecodeheader.php' ?>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <a class="navbar-brand" href="#">
            <img src="assets/Img/Logo.png" alt="Logo" class="logo">
        </a>
        <ul class="navbar-nav">
            <ul class="nav nav-pills">
                <li role="presentation" class="nav-item active">
                    <a class="nav-link" href="home.php">Actualité</a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="club.php"> Le Club</a>

                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="equipe.php">Les Equipes</a>

                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="administrative.php">Administratif</a>

                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="contact.php">Contact</a>

                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="ourpartners.php">Nos Partenaires</a>

                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" href="shop.php">Notre Boutique</a>

                </li>

            </ul>
        </ul>
        <div class="nav justify-content-end btnav">
            <?php
            session_start();

            if (!isset($_SESSION['login'])){
                echo'

                             <form action="register.php" method="post">
                                <button type="submit" name="register" class="btn btn-outline-warning">Inscription</button >
                            </form >

                            <button type = "button" class="btn btn-outline-warning btnsd" data-toggle = "modal" data-target = "#connexion" >
                                Connexion
                            </button > ';

            }
            else{
                echo'
                            <form action="../backend/Clogoff.php" method="post">
                                <button type="submit" name="deconnexion" class="btn btn-outline-warning">Déconnexion</button>
                            </form>
                            <button type="button" class="btn btn-outline-warning btnsd" data-toggle="modal" data-target="#co123">
                                 Open modal
                            </button>';
            }
            ?>
        </div>
    </nav>
    <?php hearder_contenue()?>
</header>