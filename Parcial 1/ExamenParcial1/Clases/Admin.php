<?php
require_once 'Usuario.php'; // Necesita al padre

class Admin extends Usuario {
    public function getRol() { return "Administrador"; }
}