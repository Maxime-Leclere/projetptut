<head>
    <?php include_once 'head.php' ?>
</head>

<body>
<?php include_once 'header.php' ?>

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
    </form>
</div>
<?php include_once 'footer.php' ?>
</body>