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

    // Insert de informacion
    // try {
    //     $var = $db->query("INSERT INTO venta (id_cliente, id_producto, idVendedor, fecha_venta, cantidad) VALUES (:id_cliente, :id_producto, :idVendedor, :fecha_venta, :cantidad_producto) ");
    //     $var->bindParam(':id_cliente', $idCliente);
    //     $var->bindParam(':id_producto', $idProducto);
    //     $var->bindParam(':idVendedor', $idVendedor);
    //     $var->bindParam(':fecha_venta', $fecha);
    //     $var->bindParam(':cantidad_producto', $cantidadProducto);
    //     $var->execute();
    //     echo "Se inserto correctamente";

    // } catch (PDOException $e) {
    //     echo "Error al insertar el registro: " . $e->getMessage();

    // }

    // Select de Informacion
    // try {
    //     $var = $db->query("SELECT * FROM datos");
    //     $var->execute();
    //     $datos = $var->fetchAll(PDO::FETCH_ASSOC);
 
    //     foreach ($datos as $dato) {
    //         echo "<br> ID dato: " . $dato['id'] . " Nombre: " . $dato['nombre'] . " Email: " . $dato['email'] . "<br>";
    //     }
        

    // } catch (PDOException $e) {
    //     echo "Error al realizar la consulta: " . $e->getMessage();

    // }

    // Update de informacion
    // try {
    //     $var = $db->query("UPDATE datos SET nombre = :nombre WHERE id = :id");
    //     $var->bindParam(':id', $id);
    //     $var->bindParam(':nombre', $nombre);
    //     $var->execute();
    //     echo "Se actualizo correctamente";

    // } catch (PDOException $th) {
    //     echo "Error al actualizar el registro: " . $th->getMessage();
    // }

    // Delete de informacion
    // try {
    //     $var = $db->query("DELETE FROM datos WHERE id = :id");
    //     $var->bindParam(':id', $id);
    //     $var->execute();
    //     echo "Se elimino correctamente";

    // } catch (PDOException $e) {
    //     echo "Error al eliminar el registro: " . $e->getMessage();
    // }

    //Otros tipos de PDO
    /*
        PDO::FETCH_ASSOC Devuelve asociaciones
        PDO::FETCH_NUM Devuelve un array donde indices son columnas y valores a su respectiva columna
        PDO::FETCH_BOTH Devuelve ambos
        PDO::FETCH_OBJ Devuelve objetos
    */
?>