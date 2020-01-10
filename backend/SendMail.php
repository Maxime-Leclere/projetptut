<?php
    $mail = $_POST['email'];
    $subject = $_POST['sujet'];
    $message = $_POST['message'];
var_dump($mail);
var_dump($subject);
var_dump($message);

    mail($mail, addslashes($subject), addslashes($message));
//    header('Location: ../frontend/contact.php');
