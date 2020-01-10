<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once 'head.php' ?>
    </head>

    <body>
    <?php include_once 'header.php' ?>

    <main class="custom_body">
        <h1>Formulaire de contact</h1>
        <form>
            <label>E-mail</label>
            <input name="email" required>
            <label>Sujet</label>
            <input name="sujet" required>
            <label>Message</label>
            <textarea name="message" required></textarea>
            <input name="submit">
        </form>

<!--        <div class="container" style="height: 100%"><br>-->
            <form action="backend/SendMail.php" method="post">
<!--                <div class="form-group">-->
                    <label for="email">Email addresse:</label>
                    <input type="email" class="form-control" placeholder="Enter email" id="email" name="Email">
<!--                </div>-->
<!--                <div class="form-group">-->
                    <label for="sujet">Sujet:</label>
                    <input type="text" class="form-control" id="sujet">
<!--                </div>-->
<!--                <div class="form-group">-->
                    <label for="comment">Message:</label>
                    <textarea class="form-control" rows="5" id="message"></textarea>
<!--                </div>-->

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
<!--        </div>-->

    </main>

    <?php include_once 'footer.php' ?>
    </body>
</html>
