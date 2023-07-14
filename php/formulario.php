<?php

$nombre = $_POST['NOMBRES'];
$apellido = $_POST['APELLIDO'];
$email = $_POST['EMAIL'];
$celular = $_POST['CELULAR'];
$acepto = $_POST['Acepto'];

$formcontent="
    Nombre: $nombre \n 
    apellido: $apellido \n
    email: $email \n
    celular: $celular \n
    acepta?: $acepto \n
";

$recipient = "nahuelgcuesta@gmail.com, $correo ";

$subjet = "Formulario web de $nombre $apellido";

$header = "From: $email \r \n";

$header .= "Content-Type: text/plain; charset=UTF-8";

mail($recipient, $subjet, $formcontent, $header) or die("Error!");
header("Location: formulario-gracias.html");