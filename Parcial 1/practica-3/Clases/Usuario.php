<?php

class Usuario {
    
    private $nombre;
    private $correo;

    public function __construct($nombre, $correo) {
        $this->nombre = $nombre;
        // 2 y 3. Validamos antes de asignar
        $this->setCorreo($correo);
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setCorreo($correo) {
        // Validar que el correo tenga formato válido
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            // Lanzar una excepción si el correo no es correcto
            throw new Exception("El correo '$correo' no tiene un formato válido.");
        }
        $this->correo = $correo;
    }
}

?>