<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Dirección de correo del destinatario
    $to = "juliohidalgo@gmail.com";
    $subject = "Nuevo mensaje del formulario de contacto";
    
    // Contenido del correo
    $body = "Nombre: $name\n";
    $body .= "Correo: $email\n\n";
    $body .= "Mensaje:\n$message\n";
    
    // Encabezados adicionales
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envía el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Tu mensaje ha sido enviado exitosamente.'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Hubo un error al enviar tu mensaje. Por favor, intenta de nuevo.'); window.location.href = 'index.html';</script>";
    }
}
?>
