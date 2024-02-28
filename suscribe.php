<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = $_POST["email"];
    $subject = "Confirmación de suscripción";
    $message = "Gracias por suscribirte a nuestro boletín. Tu dirección de correo electrónico $to_email ha sido registrada.";

    // Cabeceras del correo
    $headers = "From: tu_direccion_de_correo@example.com" . "\r\n" .
               "Reply-To: tu_direccion_de_correo@example.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Enviar el correo de confirmación
    if (mail($to_email, $subject, $message, $headers)) {
        echo "¡Gracias por suscribirte a nuestro boletín! Se ha enviado un correo de confirmación a $to_email.";
    } else {
        echo "Error al enviar el correo de confirmación.";
    }
}
?>