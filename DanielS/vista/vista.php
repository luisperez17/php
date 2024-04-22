<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
</head>
<body>
    <h2>Procesmaiento finalizado</h2>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Edad</th>
            <th>Genero</th>
            <th>Preferencias</th>
            <th>Estado civil</th>
        </tr>

        <?php
            include "../conexiondb/conexiondb.php";

            $datos = obtener_datos();

            foreach($datos as $dato){
                echo "<tr>";
                echo "<td>" . $dato['nombre'] . "</td>";
                echo "<td>" . $dato['email'] . "</td>";
                echo "<td>" . $dato['edad'] . "</td>";
                echo "<td>" . $dato['genero'] . "</td>";
                echo "<td>" . $dato['preferencias'] . "</td>";
                echo "<td>" . $dato['estado_civil'] . "</td>";
                echo "</tr>";
            } 
        ?>

    </table>
    
</body>
</html>