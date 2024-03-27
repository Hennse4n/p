<?php
$nombre = $_POST['person_name'];
$apellido = $_POST['person_Lname'];
$correo = $_POST['person_mail'];
$asunto = $_POST['msg'];

$D_form = "
	Nombre: $nombre\n
	Apellido: $apellido\n
	Correo: $correo\n
"

$mail = "hennsen1287@gmail.com";

$mensaje = $asunto;

$header = "From: $email\r\n";
$header = "Content-Type: text/plain: charset=UTF-8";
$email($mail, $mensaje, $D_form, $header) or die("Error!");
$header("Location: Gracias.html");
?>
