<?php

    session_start();
?>
<head>

    <?php include_once 'head.php' ?>
    <?php include_once 'header.php' ?>
</head>
<body>
    <div class="container" style="min-height: 600px"><br>
        <h3>Réinitialisation du mot de passe</h3>
        <form id='ForgetPassword' action="../backend/Cforgetpassword.php"
              method="POST">
            <div class="form-group">
                <label for="inputEmailForgetPassword" >Saisissez-votre adresse mail : </label><br>
                <input id="inputEmailForgetPassword" class="form-control" name='email' type='text'>
            </div>
            <button type="submit" class="btn btn-warning">Envoyer</button>
            <a href="#" data-toggle="popover" style="margin-left: 1%" title="Entrer votre adresse email" data-content="Un mot de passe aleatoire vous sera donné, changer le une fois connecté">Comment ça marche ?</a>
            <?php
            if (isset($_SESSION['MailSend']) && $_SESSION['MailSend'] == 'whynot') {
                echo '<p>' . 'Un e-mail avec un nouveau mot de passe vient de vous être 
                envoyé si ' . " l'adresse" . ' e-mail existe.' . '</p>';
                unset($_SESSION['MailSend']);
            } ?>
        </form>
    </div>
    <?php include_once 'footer.php' ?>

</body>
<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
    });
</script>