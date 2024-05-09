<?php

    include './conexiondb.php';

    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Insert de informacion a base de datos
        $table = 'venta';

        $result = delete_data($table, $id);

        if ($result) {
            echo "Información eliminada correctamente";
            header("Location: ./index.php");
        } else {
            echo $result;
        }

    } else {
        echo "No se ha recibido la información necesaria";
    }

?>
