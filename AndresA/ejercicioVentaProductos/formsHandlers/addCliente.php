<?php
    include '../conexiondb.php';
    include '../cifrado.php';

    if (isset($_POST['nombre']) && isset($_POST['cedula']) && isset($_POST['email']) && isset($_POST['telefono'])) {
        $nombre_usuario = $_POST['nombre'];
        $cedula_usuario = $_POST['cedula'];
        $email_usuario = $_POST['email'];
        $telefono_usuario = $_POST['telefono'];

        // Cifrado de Informacion
        $datos = array($nombre_usuario, $cedula_usuario, $email_usuario, $telefono_usuario);
        $cifrados = cifrarAES($datos);
        $nombre_cifrado = $cifrados[0];
        $cedula_cifrado = $cifrados[1];
        $email_cifrado = $cifrados[2];
        $telefono_cifrado = $cifrados[3];

        // Insert de informacion a base de datos
        $table = 'cliente';
        $colums = '(nombre_usuario, cedula_usuario, correo_usuario, telefono_usuario)';
        $values = "('$nombre_cifrado', '$cedula_cifrado', '$email_cifrado', '$telefono_cifrado')";
        
        $result = save_data($table, $colums, $values);

        if ($result) {
            echo "Información guardada correctamente";
            header("Location: ../index.php");
        } else {
            echo $result;
        }

    } else {
        echo "No se ha recibido la información necesaria";
    }


