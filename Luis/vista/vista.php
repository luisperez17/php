<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Procesamiento finalizado</h2>

    <table>
        <tr>
            <th>nombre</th>
            <th>email</th>
            <th>edad</th>
            <th>genero</th>
            <th>preferenicas</th>
            <th>Estado civil</th>
        </tr>
    <?php
        $host = 'db';
        $dbname = 'db';
        $username = 'db';
        $password = 'db';

        $conn = new mysqli($host, $dbname, $username, $password);

        $sql = "SELECT * FROM tu_tabla";

        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['edad'] . "</td>";
                echo "<td>" . $row['genero'] . "</td>";
                echo "<td>" . $row['preferencias'] . "</td>";
                echo "<td>" . $row['estado_civil'] . "</td>";
                echo "</tr>";

            }
        } else {
            echo "No hay datos en la tabla";
        }

        $conn->close();
    ?>
    </table>
</body>