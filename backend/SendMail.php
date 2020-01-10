<?php
    $mail = $_POST['email'];
    $subject = $_POST['sujet'];
    $message = $_POST['message'];


    mail($mail, $subject, $message);
    header('Location: ../frontend/contact.php');
