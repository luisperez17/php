<?php


    function guardarDatos($nombre, $email, $edad, $genero, $preferencias, $estado_civil){
        $host = 'db';
        $dbname = 'db';
        $username = 'db';
        $password = 'db';
    
        $conn = new mysqli($host, $dbname, $username, $password);

        if($conn->connect_error){
            die("Error de conexion:" . $conn->connect_error);
        }

        $sql = "insert into tu_table(nombre, email, edad, genero, preferencias, estado_civil) values ('$nombre', '$email', '$edad', '$genero', '$preferencias', '$estado_civil')";
        
        if($conn->query($sql) === TRUE){
            echo "datos guardados correctamente";
        } else {
            echo "error al guardar la info en db" . $conn->error;
        }
        $conn->close();

        
        
    }



?>