<?php

class Usuario {
    // A) Atributos con Encapsulamiento
    private $nombre;
    private $correo;

    // B) Constructor con validación
    public function __construct($nombre, $correo) {
        $this->nombre = $nombre;
        
        // Validación de formato de email
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            // Lanzar Exception si el correo no es válido
            throw new Exception("El formato del correo '$correo' es inválido.");
        }
        
        $this->correo = $correo;
    }

    // C) Getters
    public function getNombre() {
        return $this->nombre;
    }

    public function getCorreo() {
        return $this->correo;
    }
}

?>