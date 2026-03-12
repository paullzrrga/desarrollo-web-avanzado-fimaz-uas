<?php
/*La clase "Usuario" en PHP define un usuario con propiedades para nombre y correo electrónico,
 asegurando que el correo tenga un formato válido durante la creación del objeto. */
class Usuario {
    protected $nombre;
    protected $correo;

    public function __construct($nombre, $correo) {
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Formato de correo inválido: $correo");
        }
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function getNombre() { return $this->nombre; }
    public function getCorreo() { return $this->correo; }
}