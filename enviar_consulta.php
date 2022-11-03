<?php
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$correo_form = $_POST['correo'];
$mensaje_form = $_POST['mensaje'];

$cuerpo_mail = "nombre: " .$nombre_form. "\r\n" . "Apellido: " .$apellido_form . "\r\n" . "correo electronico: " .$correo_form. "\r\n" . "Mensaje: " .$mensaje_form; 

mail("matias.luque.caceres@gmail.com" , "Mensaje enviado de mi sitio.com", $cuerpo_mail);

header("locationgit: contacto.php?e=ok");
