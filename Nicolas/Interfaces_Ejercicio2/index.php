<?php

interface BaseDeDatos{
    public function conectar($servidor, $usuario, $contraseña, $base_datos);
    public function consultar($consulta);
    public function insertar($datos);
    public function eliminar($id);
    public function desconectar();
}

class ConectoMysql implements BaseDeDatos{
    private $conexion;

    public function conectar($servidor, $usuario, $contraseña, $base_datos){
        $this->conexion = new mysqli($servidor, $usuario, $contraseña, $base_datos);
        if ($this->conexion->connect_error){
            die ("Error de conexión: " . $this->conexion->connect_error);
        }
    }
    public function consultar($consulta){
        $resultado = $this->conexion->query($consulta);
        return $resultado;
    }

    public function insertar($datos){
    }

    public function eliminar($id){
    }

    public function desconectar(){
        $this->conexion->close();
    }

}

$conexion = new ConectoMysql("localhost", "user", "qwe123-.,","db");
$conexion->conectar();
$resultado = $conexion->consultar("SELECT * FROM usuarios");
$conexion->desconectar();