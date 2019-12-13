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
    </main>

    <?php include_once 'footer.php' ?>
    </body>
</html>
