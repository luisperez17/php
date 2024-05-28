<?php
    include_once "../cUsuario.php";
    include_once "../../Negocio/Usuario.php";

    // GET THE CLICED BUTTON
    $action = $_POST['action'];
    
    // GET DATA FROM THE INPUT FIELD
    $cedula = (int) $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $fechaNa = $_POST['fechaNa'];
    $email = $_POST['email'];
    $telefono = (int)$_POST['telefono'];
    $direccion = $_POST['direccion'];
    
    // OBJECT CREATION
    $usuario = new Usuario($cedula, $nombre, $fechaNa, $email, $telefono, $direccion);

    // CALL THE CRUD FUNCTION, VALIDATE THE CLICED BUTTON AND PASS THE ARGUMENTS
    $cUsuario_ = new cUsuario();

    if($action == "Crear"){
        $cUsuario_->create($usuario);
    }elseif($action == 'Leer'){
        echo $cUsuario_->read();
    }elseif($action == 'Actualizar'){
        $cUsuario_->update($usuario);
    }elseif($action == 'Borrar'){
        $cUsuario_->delete($cedula);
    }
?>