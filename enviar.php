<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "hennsen1287@gmail.com"; // Cambia esto al correo electrónico al que quieras enviar el mensaje
    $asunto = "Mensaje enviado desde el formulario de contacto";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n\n";
    $contenido .= "Mensaje:\n$mensaje";

    // Envía el correo electrónico
    if (mail($destinatario, $asunto, $contenido)) {
        echo "El mensaje ha sido enviado correctamente.";
        header(Location: index.html);
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
}
?>
