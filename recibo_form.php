<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enviar mensaje</title>
        <link rel="stylesheet" href="styles.css">        
</head>
<body>
<br><br>
<div class = "fondo2">
<H1>¡Mensaje enviado!</H1>

<?php

if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['mensajeRecibido'])) {
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensajeRecibido = $_POST['mensajeRecibido'];

$from = $email;
$to = "emicacciamani@gmail.com";
$subject = "Nuevo mensaje de ". $email;
$mensaje = $mensajeRecibido;
$headers = "From: ".$from;

if(mail($to,$subject,$mensaje,$headers)) {
        echo "¡Gracias, <b>".$nombre."</b>, por visitar mi web y escribirme!";
        echo "<br>";
        echo "En la brevedad voy a ponerme en contacto con vos, saludos!";
        echo "<br>";
        echo "<br>";
        echo "Emiliano Morales";
}else{
        echo 0;
}

}else{
        echo 0;
}

?>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</body>
</html>
