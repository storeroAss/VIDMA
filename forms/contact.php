<?php
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    
    $emailTo ="toreromono@gmail.com";

    $asunto = "Nuevo mensaje desde la Pagina de Vidma";
    $txt = "De: $nombre \n";
    $txt .= "CC: $cedula \n";
    $txt .= "Correo: $mail \n";
    $txt .= "telefono: $telefono \n\n";
    $txt .= "Mensaje: $mensaje ";


    mail($emailTo, $asunto, $txt);
    
    echo"<script>alert("Mensaje enviado Correctamente")</script>";
    echo"<script> setTimeout(\"Location.href='../contac.html'\",1000)</script>;
    
    ?>
