<?php

    include './conexiondb.php';

    if (isset($_POST['cliente']) && isset($_POST['vendedor']) && isset($_POST['producto']) && isset($_POST['cantidad']) && isset($_POST['fecha'])) {
        $cliente = $_POST['cliente'];
        $vendedor = $_POST['vendedor'];
        $producto = $_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $fecha = $_POST['fecha'];

        // Insert de informacion a base de datos
        $table = 'venta';
        $colums = '(id_cliente, id_producto, id_vendedor, fecha_venta, cantidad_productos)';
        $values = "('$cliente', '$producto', '$vendedor', '$fecha', '$cantidad')";

        $result = save_data($table, $colums, $values);

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
