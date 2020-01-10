<?php
    $mail = $_POST['email'];
    $subject = $_POST['sujet'];
    $message = $_POST['message'];


//    mail($mail, $subject, $message);
    mail("maxleclere1999@gmail.com", "zoulou", "gggggggggggg");
    header('Location: ../frontend/contact.php');
