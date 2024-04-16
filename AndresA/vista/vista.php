<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Procesamiento Finalizado</h2>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Edad</th>
            <th>Género</th>
            <th>Preferencias</th>
            <th>Estado Civil</th>
        </tr>
        <?php
            include '../conexiondb/conexiondb.php';

            $datos = obtener_datos();

            foreach ($datos as $dato) {
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
