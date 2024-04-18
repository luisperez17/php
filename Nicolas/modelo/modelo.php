<?php

function guardarDatos($nombre, $email, $edad, $genero, $preferencias, $estado_civil){

    $host = 'db';
    $dbname = 'db';
    $username = 'db';
    $password = 'db';

    $conn = new mysqli($host, $dbname, $username, $password);

    if ($conn->connect_error){
        die("Error de conexion: " . $conn->connect_error);
    }

    $sql = "INSERT INTO tu_tabla(nombre, email, edad, genero, preferencias, estado_civil)
    VALUES ('$nombre', '$email', '$edad', '$genero', '$preferencias', '$estado_civil')";

    if ($conn->query($sql)=== TRUE){
        echo "Datos guardados correctamente.";
    } else {
        echo "Error al guardar la info en la BD" . $conn->error;
    }

    $conn->close();

}
