<?php
    $mail = $_POST['email'];
    $subject = $_POST['sujet'];
    $message = $_POST['message'];

    mail($mail, addslashes($subject), addslashes($message));
    header('Location: ../frontend/contact.php');
