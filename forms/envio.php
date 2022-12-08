<?php  




if(isset($_POST['Enviar'])){
    if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['tema']) && !empty($_POST['mensaje'])){

        $correo = $_POST['correo'];
        $nombre = $_POST['nombre'];
        $tema = $_POST['tema'];
        $mensaje = $_POST['mensaje'];
        $email = "toreromono";
        $header = "from: " . $correo . "\r\n";
        $header.= "Reply-To: " . $correo . "\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail = @mail($email,$asunto,$mensaje,$header);
        if(){
            header('Location: '.$contac.html);
        }
    }
}

  
?>