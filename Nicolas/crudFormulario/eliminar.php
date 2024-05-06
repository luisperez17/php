<!DOCTYPE html>
<html lang="es">
<head>
    <title>Procesamiento PHP</title>
</head>
<body>
    <h2>Eliminación de datos</h2>
    <?php
    
    eliminarDatos();

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
   
   

    ?>
</body>
</html>