<?php
include_once 'Usuario.php';

class Alumno extends Usuario {
    // Atributo adicional
    private $matricula;

    public function __construct($nombre, $correo, $matricula) {
        // Usamos parent para reutilizar el constructor de Usuario
        parent::__construct($nombre, $correo);
        $this->matricula = $matricula;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    // Método que retorna "Alumno"
    public function getRol() {
        return "Alumno";
    }
}
?>