<?php
    // on recupère les données du formulaire de contact.php
    $mail = $_POST['email'];
    $subject = $_POST['sujet'];
    $message = $_POST['message'];

    // on envoie le mail
    // on fait un addslashes au cas ou il y a des apostrophes ou des guillemets
    // dans le messsage
    mail($mail, addslashes($subject), addslashes($message));
    // on redirige la page vers les contacts
    header('Location: ../frontend/contact.php');
