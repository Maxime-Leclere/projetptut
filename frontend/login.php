<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once 'head.php' ?>
    </head>

    <body>
        <?php include_once 'header.php' ?>

        <main class="custom_body">
            <div class="content_login">
                <h1>Connextion</h1>
                <form class="form_login" action="" method="post">
                    <label id="label_email">E-mail</label>
                    <input id="input_email" type="email" required>
                    <label id="label_password">Mot de passe</label>
                    <input id="input_password" type="password" required>
                    <input id="button_login" value="Valider" type="submit">
                </form>
            </div>
        </main>

        <?php include_once 'footer.php' ?>
    </body>
</html>


