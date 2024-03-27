<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["person_name"];
    $email = $_POST["person_mail"];
    $mensaje = $_POST["msg"];

    $destinatario = "hennsen1287@gmail.com"; // Cambia esto al correo electrónico al que quieras enviar el mensaje
    $asunto = "Mensaje enviado desde el formulario de contacto";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n\n";
    $contenido .= "Mensaje:\n$mensaje";

    // Envía el correo electrónico
    if (mail($destinatario, $asunto, $contenido)) {
        echo "El mensaje ha sido enviado correctamente.";
        header(Location: );
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>

