<?php
    include_once "../cLibros.php";
    include_once "../../Negocio/Libro.php";

    // GET THE CLICED BUTTON
    $action = $_POST['action'];
    
    // GET DATA FROM THE INPUT FIELD
    $id = (int) $_POST['id'];
    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];
    $categoria = $_POST['categoria'];
    $paginas = (int) $_POST['paginas'];
    $fecha_publicacion = $_POST['fecha_publicacion'];
    
    // OBJECT CREATION
    $libro = new Libro($id, $nombre, $autor, $editorial, $categoria, $paginas, $fecha_publicacion);

    // CALL THE CRUD FUNCTION, VALIDATE THE CLICED BUTTON AND PASS THE ARGUMENTS
    $cLibros_ = new cLibros();

    if($action == "Crear"){
        $cLibros_->create($libro);
    }elseif($action == 'Leer'){
        echo $cLibros_->read();
    }elseif($action == 'Actualizar'){
        $cLibros_->update($libro);
    }elseif($action == 'Borrar'){
        $cLibros_->delete($id);
    }
?>