<?php
        require_once("../../constroller/torneosController.php");
        //atrapar los valores introducidos en el formulario
        $nombreTorneo = $_POST['txtNombreTorneo'] ?? '';
        $organizador = $_POST['txtOrganizador'] ?? '';
        $patrocinadores = $_POST['txtPatrocinadores'] ?? '';
        $sede = $_POST['txtSede'] ?? '';
        $categoria = $_POST['txtCategoria'] ?? '';
        $premio1 = $_POST['txtPremio1'] ?? '';
        $premio2 = $_POST['txtPremio2'] ?? '';
        $premio3 = $_POST['txtPremio3'] ?? '';
        $otrosPremio = $_POST['txtOtrosPremio'] ?? '';
        $txtUsuario = $_POST['txtUsuario'] ?? '';
        $contrasena = $_POST['txtContrasena'] ?? '';

        echo $nombreTorneo;
        echo "<br>".$organizador;
        echo "<br>".$patrocinadores;
        echo "<br>".$sede;
        echo "<br>".$categoria;
        echo "<br>".$premio1;
        echo "<br>".$premio2;
        echo "<br>".$premio3;
        echo "<br>".$otrosPremio;
        echo "<br>".$txtUsuario;
        echo "<br>".$contrasena;

        //instanciamos nuestro controlador
        $objController = new torneosController();
        $objController->saveTorneo($nombreTorneo, $organizador, $patrocinadores, $sede, $categoria, $premio1, $premio2, $premio3, 
        $otrosPremio, $txtUsuario, $contrasena);
?>