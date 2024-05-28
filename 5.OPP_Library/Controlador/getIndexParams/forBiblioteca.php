<?php
    include_once "../cBiblioteca.php";
    include_once "../../Negocio/Biblioteca.php";

    // GET THE CLICED BUTTON
    $action = $_POST['action'];
    
    // GET DATA FROM THE INPUT FIELD
    $id = (int) $_POST['id'];
    $nombre = $_POST['biblioteca'];
    $pais = $_POST['pais'];
    $direccion = $_POST['direccion'];
    
    // OBJECT CREATION
    $biblioteca = new Biblioteca($id, $nombre, $pais, $direccion);

    // CALL THE CRUD FUNCTION, VALIDATE THE CLICED BUTTON AND PASS THE ARGUMENTS
    $cBiblioteca_ = new cBiblioteca();

    if($action == "Crear"){
        $cBiblioteca_->create($biblioteca);
    }elseif($action == 'Leer'){
        echo $cBiblioteca_->read();
    }elseif($action == 'Actualizar'){
        $cBiblioteca_->update($biblioteca);
    }elseif($action == 'Borrar'){
        $cBiblioteca_->delete($id);
    }
?>