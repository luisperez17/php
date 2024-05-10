<?php

    include './db.php';

    if (isset($_POST['id']) && isset($_POST['cliente']) && isset($_POST['vendedor']) && isset($_POST['producto']) && isset($_POST['cantidad']) && isset($_POST['fecha'])) {
        $id = $_POST['id'];
        $cliente = $_POST['cliente'];
        $vendedor = $_POST['vendedor'];
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $fecha = $_POST['fecha'];

        // Insert de informacion a base de datos
        $table = 'venta';;
        $values = "id_cliente = '$cliente', id_vendedor = '$vendedor', id_producto = '$producto', fecha_venta = '$fecha', cantidad_productos = '$cantidad'";

        $result = update_data($table, $id, $values);

        if ($result) {
            echo "Información guardada correctamente";
            header("Location: ./index.php");
        } else {
            echo $result;
        }

    } else {
        echo "No se ha recibido la información necesaria";
    }

?>