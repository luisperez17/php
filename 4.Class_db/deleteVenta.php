<?php
    include "nueva_venta.php";
    $id_venta = $_POST['venta_'];
    delete_venta($id_venta);
    header("Location: /vista_delete.php")
?>