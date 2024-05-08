<?php
    $host = 'db';
    $dbname = 'db';
    $username = 'db';
    $password = 'db';
 
    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "conexion exitosa" . "<br>";
    } catch (PDOException $e) {
        echo "Error de conexion: " . $e->getMessage();
    }
 
    $id_cliente = 3 ;
    $id_producto = 3;
    $id_vendedor= 3;
    $fecha_venta = '2024-05-07' ;
    $cantidad_productos = 15;
 
 
    try {
        $var = $db->prepare("INSERT INTO venta (id_cliente, id_producto, id_vendedor, fecha_venta, cantidad) VALUES (:id_cliente, :id_producto, :id_vendedor, :fecha_venta, :cantidad_productos)");
        $var->bindParam(':id_cliente', $id_cliente);
        $var->bindParam(':id_producto', $id_producto);
        $var->bindParam(':id_vendedor', $id_vendedor);
        $var->bindParam(':fecha_venta', $fecha_venta);
        $var->bindParam(':cantidad_productos', $cantidad_productos);
        $var->execute();
        echo "Registro insertado correctamente";
 
    } catch (PDOException $e) {
        echo "Error al insertar registro: " . $e->getMessage();
    }
 
    try {
        $var = $db->prepare("SELECT * FROM venta");
        $var->execute();
        $ventas = $var->fetchALL(PDO::FETCH_ASSOC);
 
        foreach ($ventas as $venta) {
            echo "ID Cliente: " . $venta['id_cliente'] . "ID Producto: " . $venta['id_producto'] . "ID Vendedor: " . $venta['id_vendedor'] . "Fecha de venta: " . $venta['fecha_venta'] . "Cantidad de Productos: " . $venta['cantidad'] . "<br>";
        }
 
    } catch (PDOException $e) {
        echo "Error leer registros: " . $e->getMessage();
    }
 
    $id_venta = 18;
    $nueva_cantidad = 300;
 
    try {
        $var = $db->prepare("UPDATE venta SET cantidad = :nueva_cantidad WHERE id = :id_venta");
        $var->bindParam(':id_venta', $id_venta);
        $var->bindParam(':nueva_cantidad', $nueva_cantidad);
 
        $var->execute();
 
        echo "Actualizacion de registro realizado correctamente";
    } catch (PDOException $e) {
        echo "Error al actualizar registro: " . $e->getMessage();
    }
 
    $id_eliminar = 18;
 
    try {
        $var = $db->prepare("DELETE FROM venta WHERE id = :id_venta");
        $var->bindParam(':id_venta', $id_eliminar);
 
        $var->execute();
 
        echo "Registro eliminado correctamente";
    } catch (PDOException $e) {
        echo "Error al eliminar registro registro: " . $e->getMessage();
    }
 
    // PDO::FETCH_ASSOC
    // PDO::FETCH_NUM
    // PDO::FETCH_BOTH
    // PDO::FETCH_OBJ
    // PDO::FETCH_CLASS
 
?>