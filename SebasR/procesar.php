<?php

    $host = 'db';
    $dbname = 'db';
    $username = 'db';
    $password = 'db';

    $conn = new mysqli($host, $dbname, $username, $password);


    if($conn -> connect_error){
        die("Error de conexioin: ".$conn->connect_error);
    }
    if(isset($_FILES['archivo']))
    {
        if($_FILES['archivo']['error'] === UPLOAD_ERR_OK){
            $rutatemporal = $_FILES['archivo']['tmp_name'];
            $datos = array_map('str_getcsv', file($rutatemporal));
            foreach($datos as $fila){
                $f = $fila[0];
                $fila = explode(";",$f);
                print_r($f);
                $sql = "INSERT INTO tu_tabla (nombre, email, edad, genero, preferencias, estado_civil)
                VALUES ('$fila[0]','$fila[1]','$fila[2]','$fila[3]','$fila[4]','$fila[5]')
                ";
                if($conn->query($sql) === TRUE){
                    echo "Datos guardados correctamente";
                }else{
                    echo "Error al guardad la informacion en la DB".$conn->error;
                }
            }
        }

    }
    if(isset($nombre)){
        print("isSet");
        $sql = "INSERT INTO tu_tabla (nombre, email, edad, genero, preferencias, estado_civil)
                VALUES ('$nombre','$email','$edad','$genero','$preferencias','$estado_civil')
                ";
        if($conn->query($sql) === TRUE){
            echo "Datos guardados correctamente";
        }else{
            echo "Error al guardad la informacion en la DB".$conn->error;
        }
    }

    $conn->close();
    header("Location: /vista/vista.php");
?>