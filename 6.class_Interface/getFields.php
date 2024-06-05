<?php
    include 'cuser.php';

    // GET THE CLICED BUTTON
    $action = $_POST['action'];
    
    // GET DATA FROM THE INPUT FIELD
    $email = $_POST['email1'];
    $password = $_POST['password1'];     

    // CALL THE CRUD FUNCTION, VALIDATE THE CLICED BUTTON AND PASS THE ARGUMENTS
    $cUser = new cuser($email, $password);
    if($action == "Crear"){
        $cUser->crear_usuario($email, $password);
    }elseif($action == 'Leer'){
        echo $cUser->consulta_usuario($email);
    }elseif($action == 'Actualizar'){
        $cUser->edicion_usuario($email, $password);
    }
?>