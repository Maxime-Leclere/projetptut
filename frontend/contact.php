<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once 'head.php' ?>
    </head>

    <body>
        <?php include_once 'header.php' ?>

        <div class="container" style="min-height: 770px"><br>
            <form action="../backend/SendMail.php" method="post">
                <h1>Formulaire de contact</h1>
                <div class="form-group">
                    <label for="email">Email addresse:</label>
                    <input type="email" class="form-control" placeholder="Enter email" name="email">
                </div>

                <div class="form-group">
                    <label for="sujet">Sujet:</label>
                    <input type="text" class="form-control" name="sujet">
                </div>

                <div class="form-group">
                    <label for="comment">Message:</label>
                    <textarea class="form-control" rows="5" name="message"></textarea>
                </div>

                <button type="submit" class="btn btn-warning">Submit</button>
            </form>
        </div>

        <?php include_once 'footer.php' ?>
    </body>
</html>
