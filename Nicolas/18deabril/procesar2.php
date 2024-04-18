<?php

    $host = 'db';
    $dbname = 'db';
    $username = 'db';
    $password = 'db'; 
    
    $conn = new mysqli($host, $dbname, $username, $password);

    if ($FILES['archivos']['error'] === UPLOAD_ERR_OK){
        $rutatemporal = $FILES['archivo']['tmp_name'];

        $datos = array_map('str_getcsv', file($rutatemporal));

        foreach($datos as $fila){

            $nombre = base64_decode($fila[0]);
            $email =  base64_decode($fila[1]);
            $edad = $fila[2];
            $genero = $fila[3];
            $preferencias = $fila[4];
            $estado_civil = $fila[5];

            $nombreSanitizado = filter_var($nombre, FILTER_SANITIZE_STRING);
            $emailSanitizado = filter_var($email, FILTER_SANITIZE_EMAIL); s

            $sql = "INSERT INTO tu_tabla (nombre, email, edad, genero, preferenicas, estado_civil)
                 VALUES ('$nombreSanitizado', '$emailSanitizado', '$edad', '$genero', '$preferencias', '$estado_civil')";

        }
        if ($conn->query($sql)=== TRUE){
            echo "Datos ingresados correctamente.";
        } else {
            echo "Error al insertar la info en la BD" . $conn->error;
        }
    }