<!DOCTYPE html>
<html lang="es">
<head>
    <title>Procesamiento PHP</title>
</head>
<body>
    <h2>Procesamiento PHP</h2>
    <?php

    $id_cliente = $_POST['id_cliente'];
    $id_producto = $_POST['id_producto'];
    $id_vendedor = $_POST['id_vendedor'];
    $fecha_venta = $_POST['fecha_venta'];
    $cantidad_productos = $_POST['cantidad_productos'];

    $eliminar_datos = $_POST['eliminado'];

    guardarDatos($id_cliente, $id_producto, $id_vendedor, $fecha_venta, $cantidad_productos);
    echo($eliminar_datos);
    
    if ($eliminar_datos){
        eliminarDatos();
    }

    function eliminarDatos(){
        $host = 'db';
        $dbname = 'db';
        $username = 'db';
        $password = 'db';

        $conn = new mysqli($host, $dbname, $username, $password);
    
        if ($conn->connect_error){
            die("Error de conexion: " . $conn->connect_error);
        }

        $sql = "DELETE FROM venta
        WHERE id = (SELECT MAX(id) FROM venta)";

        if ($conn->query($sql)=== TRUE){
            echo "Registro eliminado correctamente";
        } else {
            echo "Error eliminando" . $conn->error;
        }
    }
   
   
    
    function guardarDatos($id_cliente, $id_producto, $id_vendedor, $fecha_venta, $cantidad_productos){

        $host = 'db';
        $dbname = 'db';
        $username = 'db';
        $password = 'db';
    
        $conn = new mysqli($host, $dbname, $username, $password);
    
        if ($conn->connect_error){
            die("Error de conexion: " . $conn->connect_error);
        }
    
        $sql = "INSERT INTO venta(id_cliente, id_producto, id_vendedor, fecha_venta, cantidad_productos)
        VALUES ('$id_cliente', '$id_producto', '$id_vendedor', '$fecha_venta', '$cantidad_productos')";
    
        if ($conn->query($sql)=== TRUE){
            echo "Datos guardados correctamente.";
        } else {
            echo "Error al guardar la info en la BD" . $conn->error;
        }
    
        $conn->close();
    
    }
    

    ?>
</body>
</html>