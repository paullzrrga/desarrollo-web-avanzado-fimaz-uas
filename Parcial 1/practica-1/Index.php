/* The code you provided is written in PHP. Here's what it does: */
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'Usuario.php';

$usuario1 = new Usuario("Paul Lizarraga", "paullizarara@correo.com");

echo "Nombre: " . $usuario1->getNombre();
echo "<br>";
echo "Correo: " . $usuario1->getCorreo();
?>