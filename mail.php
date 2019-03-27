<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['submit'])) {

    $nombre = $_POST['name'];
    $email = $_POST['email'] ;
    $mensaje = $_POST['message'];

    $mailTo = "Daniel.kesel97@gmail.com";
    $headers = "From: " .$email;
    $txt = "Recibiste un mail de  .$nombre. .\n\n .$message ";

    mail($mailTo,  $text , $headers) ;
    header("Location: contact-us.php?mensajeEnviado") ;
    } else{
        echo "Debes completar tus datos";
    }
    
    ?>


