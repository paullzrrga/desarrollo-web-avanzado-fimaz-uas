<?php

include 'Admin.php';

$admin1 = new Admin("Paul Lizarraga", "paullizarara@gmail.com");

echo "Nombre: " . $admin1->getNombre();
echo "<br>";
echo "Correo: " . $admin1->getCorreo();
echo "<br>";
echo "Rol: " . $admin1->getRol();

?>