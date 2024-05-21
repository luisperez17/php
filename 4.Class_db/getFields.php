<?php
    include "nueva_venta.php";
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];
    $cliente = $_POST['cliente'];
    $producto = $_POST['producto'];
    $vendedor = $_POST['vendedor'];
    insert_record($cantidad, $fecha, $cliente, $producto, $vendedor);
    header("Location: /vista_ok.php")
?>