<?php
class Usuario {
    // Declaración de atributos de Usuario
    private $nombre;
    private $idUsuario;
    private $cedula;
    private $telefono;
    private $email;

    // Declaración de funciones

    // Constructor
    public function __construct($nombre, $idUsuario, $cedula, $telefono, $email) {
        $this->nombre = $nombre;
        $this->idUsuario = $idUsuario;
        $this->cedula = $cedula;
        $this->telefono = $telefono;
        $this->email = $email;
    }

    // Getters y setters
    public function getNombre() {
        return $this->nombre;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

}
?>
