<?php
    $nombre = $_POST['name'];
    $mail = $_POST['email'];
    $telefono = $_POST['numero'];
    $mensaje = $_POST['message'];
    
    $emailTo ="toreromono@gmail.com";
    $asunto = "Contacto desde mi pagina Web";
    $txt = "De: $nombre \n";
    $txt .= "Correo: $mail \n";
    $txt .= "Asunto: $telefono \n\n";
    $txt .= "Mensaje: $mensaje ";


    mail($emailTo, $asunto, $txt);

   header('Location:../index.html')
  

?>
