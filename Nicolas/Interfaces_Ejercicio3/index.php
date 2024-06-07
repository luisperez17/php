<?php

interface ModuloAutenticacion{
    public function registrarUsuario($nombre, $correo, $contraseña);
    public function iniciarSesion($correo, $contraseña);
    public function cerrarSesion();
    public function verificarSesion();
}

interface ModuloUsuarios{
    public function obtenerUsuario($id);
    public function editarUsuario($id, $datos);
    public function EliminarUsuario($id);
}

class implementacionAutenticacion implements ModuloAutenticacion{

}

class implementacionUsuarios implements ModuloUsuarios{

}

$moduloAutenticacion = new implementacionAutenticacion();
$moduloUsuarios = new implementacionUsuarios();

$moduloAutenticacion->registrarUsuario("juan","correo@correo.co", "contraseña123");
$idiUsuario = $moduloAutenticacion->iniciarSesion("correo@correo.co", "contraseña123")
$usuario = $moduloUsuarios->obtenerUsuario($idiUsuario);

$conexion = new ConectoMysql("localhost", "user", "qwe123-.,","db");
$conexion->conectar();
$resultado = $conexion->consultar("SELECT * FROM usuarios");
$conexion->desconectar();