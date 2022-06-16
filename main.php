<?php

error_reporting(0);
$name = $_POST['name'];
$email= $_POST['email'];
$message = $_POST['message'];

$header = 'From: ' . $email . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje .= "Solicitud de ayuda - Página de Internacionalización" . "\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time()). " \r\n";
$mensaje .= "Este mensaje fue enviado por " . $name . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Mensaje: " . $message. " \r\n";

$para = 'webmaster@unac.edu.co';
$asunto = 'Solicitud de ayuda - Página de Internacionalización';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo '<script type="text/javascript">
        alert(" '. $name .' Su mensaje ha sido enviado correctamente");
        window.location.href="https://www.unac.edu.co/internacionalizacion";
        </script>';
?> 