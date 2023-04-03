<?php
if(isset($_POST['correo'])) {
 
    // Correo electrónico del destinatario
    $to = "neithan1327@gmail.com";
 
    // Asunto del correo electrónico
    $subject = "Contacto desde tu sitio web.";
 
    // Contenido del correo electrónico
    $message = $_POST['mensaje']."\n\nDe: ".$_POST['nombre']." <" . $_POST['correo'] . ">" . " # " . $_POST['telefono'];
 
    // Cabeceras del correo electrónico
    $headers = "De:" . $_POST['correo'];
 
    // Envía el correo electrónico usando la función mail de PHP
    mail($to,$subject,$message,$headers);
 
    // Redirige al usuario a una página de confirmación
    header('Location: confirmation.html');
 
} else {
 
    // Si el usuario accede directamente a esta página sin enviar el formulario, redirige a la página de inicio
    header('Location: index.html');
 
}
?>
