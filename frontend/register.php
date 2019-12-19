<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once 'head.php' ?>
</head>

<body>
<?php include_once 'header.php' ?>

<main class="custom_body">
    <div class="content_inscription">
        <h1>Inscription</h1>
        <form class="form_register" action="" method="post">
            <label id="label_name">Nom</label>
            <input id="input_name" type="text" >
            <label id="label_firstname">Prenom</label>
            <input id="input_firstname" type="text">
            <label id="label_age">Age</label>
            <input id="input_age" type="number">
            <label id="label_email">E-mail</label>
            <input id="input_email" type="email" required>
            <label id="label_password">Mot de passe</label>
            <input id="input_password" type="password" required>
            <label id="label_password_confirmed">Verification du Mot de passe</label>
            <input id="input_password_confirmed" type="password" required>

            <input id="button_inscription" value="Valider" type="submit">
        </form>

    </div>
</main>

<?php include_once 'footer.php' ?>
</body>
</html>

