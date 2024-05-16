<?php
    $host = 'db';
    $dbname = 'db';
    $username = 'db';
    $password = 'db'; 
   
    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e){
        echo "Error de conexión: " . $e->getMessage();
    }
    $id_cliente = 5;
    $id_producto = 5;
    $id_vendedor= 5;
    $fecha_venta = '2024-05-07' ;
    $cantidad_productos = 15;
    /*
    //Para hacer un registro (Si está mal, hay captura de pantalla)
    try {
    $var = $db->prepare("INSERT INTO venta (id_cliente, id_producto, id_vendedor, fecha_venta, cantidad) VALUES (:id_cliente, :id_producto, :id_vendedor, : fecha_venta, :cantidad_productos)");
    $var->bindParam(':id_cliente', $id_cliente); $var->bindParam('id_producto', $id_producto); $var->bindParam('Id_vendedor', $id_vendedor); $var->bindParam(': fecha_venta', $fecha_venta);
    $var->bindParam(': cantidad_productos', $cantidad_productos);
    $var->execute();
    echo "Registro insertado correctamente";
    } catch (PDOException $e) {
    echo "Error al insertar registro: ".$e->getMessage();
    }
    */

    /*
    //Para leer registros (Si está mal, hay captura de pantalla)
    try {
        $var = $db->prepare("SELECT * FROM venta");
        $var->execute();
        $ventas = $var->fetchAll(PDO::FETCH_ASSOC);

        foreach ($ventas as $venta) {
        echo "ID Cliente: ".$venta['id_cliente'] . "ID Producto: ".$venta['id_producto'] . "ID Vendedor: Sventa['id_vendedor'] . "Fecha de venta: " $venta['fecha_venta'] . "Cantidad de Productos: ".$venta['cantidad']."<br>";
        } 
        }catch (PDOException $e) {
        echo "Error leer registros:. $e->getMessage();
    }
    */

    
?>