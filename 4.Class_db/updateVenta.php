<?php
    include "nueva_venta.php";
    $id = $_POST['id'];
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];
    $cliente = $_POST['cliente'];
    $producto = $_POST['producto'];
    $vendedor = $_POST['vendedor'];
    update_venta($id, $cantidad, $fecha, $cliente, $producto, $vendedor);
    header("Location: /update_ok.php")
?>