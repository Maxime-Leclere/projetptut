<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once 'head.php' ?>
    </head>

    <body>
        <?php include_once 'header.php' ?>

        <div class="container" style="min-height: 770px"><br>
            <form action="../backend/SendMail.php" method="post">
                <h2>Formulaire de contact</h2>
                <div class="form-group">
                    <label for="email">Adresse email :</label>
                    <input type="email" class="form-control" placeholder="Veuillez entrer votre adresse email" name="email">
                </div>

                <div class="form-group">
                    <label for="sujet">Sujet :</label>
                    <input type="text" class="form-control" placeholder="Entrer le sujet de votre email" name="sujet">
                </div>

                <div class="form-group">
                    <label for="comment">Message :</label>
                    <textarea class="form-control" rows="5" name="message" placeholder="Le contenue de votre email"></textarea>
                </div>

                <button type="submit" class="btn btn-warning">Envoyer</button>
            </form>
        </div>

        <?php include_once 'footer.php' ?>
    </body>
</html>
