<?php

function guardar_datos($nombre, $email, $edad, $genero, $preferencias, $estado_civil) {
    $servername = "db";
    $dbname = "db";
    $username = "db";
    $password = "db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL query
    $sql = "INSERT INTO datos (nombre, email, edad, genero, preferencias, estado_civil)
    VALUES ('$nombre', '$email', '$edad', '$genero', '$preferencias', '$estado_civil')";

    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}

function obtener_datos() {
    $servername = "db";
    $dbname = "db";
    $username = "db";
    $password = "db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL query
    $sql = "SELECT * FROM datos";

    // Execute query
    $result = $conn->query($sql);

    // Check if there are results
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            $datos[] = $row;
        }
    } else {
        echo "0 results";
    }
    
    // Close connection
    $conn->close();

    return $datos;
}

?>