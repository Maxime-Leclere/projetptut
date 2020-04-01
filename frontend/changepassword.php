<head>
    <?php include_once 'head.php' ?>
</head>

<body>
<?php
if($_SESSION['Status'] == 0) {
    try {
        header('Location: home.php');

    } catch (Exception $e){}
}

include_once 'header.php' ?>

<div class="container" style="min-height: 81%"><br>
    <form action="../backend/Cchangepassword.php" method="post">
        <div class="form-group">
            <label for="pwd">Mot de passe:</label>
            <input type="password" class="form-control" placeholder="Entrer mot de passe" id="pwd" name="Mdp">
        </div>
        <div class="form-group">
            <label for="pwd">Confirmez vôtre mot de passe:</label>
            <input type="password" class="form-control" placeholder="Entrer mot de passe" id="pwd" name="MdpS">
        </div>

        <button type="submit" class="btn btn-warning">Changer de mot de passe</button>
        <?php
        if (isset($_SESSION['CPdwc']) && $_SESSION['CPdwc'] == 'court') {
            echo '<div class="alert alert-danger">
                    <strong>Mot de passe trop court!</strong> Veuillez rentrer un mot de passe plus grand d\'au moins 10 caractères.
                   </div>';
            unset($_SESSION['CPdwc']);
        } elseif (isset($_SESSION['CPdwc']) && $_SESSION['CPdwc'] = "long"){
            echo '<div class="alert alert-success">
                    <strong>Mot de passe changé</strong> Mot de passe changé avec succès.
                  </div>';
            unset($_SESSION['CPdwc']);
        }

        ?>
    </form>
</div>
<?php include_once 'footer.php' ?>
</body>
