<?php
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    
    $emailTo ="vidmaasesorias@gmail.com";

    $asunto = "Nuevo mensaje desde la Pagina de Vidma";
    $txt = "De: $nombre \n";
    $txt .= "CC: $cedula \n";
    $txt .= "Correo: $correo \n";
    $txt .= "telefono: $telefono \n\n";
    $txt .= "Mensaje: $mensaje ";

    mail($emailTo, $asunto, $txt);
    header('Location:../contac.html');
    
    ?>
