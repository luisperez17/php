<?php

function guardarDatos($nombre, $email, $oedad, $genero, $preferencias, $estado_civil){
    $host="db";
    $dbname = "db";
    $username = "db";
    $password ="db";

    //Crear conexion
    $conn = new mysqli($host, $dbname, $username, $password);

    //Confirmar conexion
    if($conn->connect_error) {
        die("Error de conexion:". $conn->connect_error);
    }

    //Consulta SQL
    $sql ="INSERT INTO tabla_prueba (nombre, email, edad, genero, preferencias, estado_civil)
    VALUES ('$nombre', '$email', '$oedad', '$genero', '$preferencias', '$estado_civil')";
    
    //Validar consulta
    if($conn->query($sql) === TRUE) {
        echo "Datos guardados correctamente";
    }else{
        echo "Error al guardar la informacion en la base de datos: " .$conn->error;
    }
    
    $conn->close();

}


function obtener_datos() {
    $servername = "db";
    $dbname = "db";
    $username = "db";
    $password = "db";

    // Crear conexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // confirmar conexion
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Consulta SQL
    $sql = "SELECT * FROM tabla_prueba";

    // Validar consulta
    $result = $conn->query($sql);

    // Validar resultados
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $datos[] = $row;
        }
    } else {
        echo "0 results";
    }
    
    // Cerrar conexion
    $conn->close();

    return $datos;
}
?>