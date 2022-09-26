<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$header = 'De: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'cm.manriquez@gmail.com';
$asunto = 'Mensaje desde la web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:ty.html");
?>