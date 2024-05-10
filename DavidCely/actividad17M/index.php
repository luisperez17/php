<?php
    $host = 'db';
    $dbname = 'db';
    $username = 'db';
    $password = 'db';

    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión exitosa a la base de datos $dbname <br>";

    } catch (PDOException $e) {
        echo "Conexión fallida: " . $e->getMessage();
    }

    $idCliente = 5;
    $idProducto = 5;
    $idVendedor = 5;
    $fecha = "2024-05-07";
    $cantidadProducto = 15;


?>