<?php

    $servername = "db";
    $database = "db";
    $username = "db";
    $password = "db";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if($_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        $ruta_temporal = $_FILES['archivo']['tmp_name'];

        $datos = array_map('str_getcsv', file($ruta_temporal));

        foreach($datos as $fila) {
            // Obtencion de los datos
            $nombre = base64_decode($fila[0]);
            $email = base64_decode($fila[1]);
            $edad = $fila[2];
            $genero = $fila[3];
            $preferencias = $fila[4];
            $estado_civil = $fila[5];

            // Verificacion y saneamiento de los datos
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            $edad = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);
            $genero = filter_var($genero, FILTER_SANITIZE_STRING);
            $preferencias = filter_var($preferencias, FILTER_SANITIZE_STRING);
            $estado_civil = filter_var($estado_civil, FILTER_SANITIZE_STRING);

            // Insert de los datos
            $sql = "INSERT INTO datos (nombre, email, edad, genero, preferencias, estado_civil) VALUES ('$nombre', '$email', '$edad', '$genero', '$preferencias', '$estado_civil')";
            $conn->query($sql);
        }

        // Verificacion de la insert
        if ($conn->query($sql) === TRUE) {
            echo "Datos insertados correctamente";
            header('Location: ../vista/vista.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

    } else {
        echo "Error al subir el archivo";
    }
?>
