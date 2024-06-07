<?php

class ConectorBD{
    private $conexion;
    function __construct() {
        $this->conexion = new mysqli("localhost", "usuario", "contraseña", "base_datos"); 
        if ($this->conexion->connect_error) {
        die("Error de conexión: " . $this->conexion->connect_error);
        }
    }
    function _destruct() {
    $this->conexion->close();
    }

    function consultar($consulta) {
        $resultado = $this->conexion->query($consulta); 
        return $resultado;
    }
}

$conexion = new ConectorBD();
$resultado = $conexion->consultar("SELECT * FROM usuarios");