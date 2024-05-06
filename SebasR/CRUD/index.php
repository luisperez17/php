<!DOCTYPE html>
<html lang="es">
<head>
    <title>Actividad CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Comidas rapidas</h2>
    <form action="coneccionDB.php" method="POST">
        <label for="id_cliente">Código cliente: </label>
        <input type="number" name="id_cliente" id="id_cliente" required><br>

        <label for="id_producto">Id producto:</label>
        <input type="number" name="id_producto" id="id_producto" required><br>

        <label for="id_vendedor">Id vendedor:</label>
        <input type="number" name="id_vendedor" id="id_vendedor" required><br>

        <label for="fecha_venta">Fecha venta:</label>
        <input type="date" name="fecha_venta" id="fecha_venta" required><br>

        <label for="cantidad_productos">Cantidad de productos:</label>
        <input type="number" name="cantidad_productos" id="cantidad_productos" required><br>

        <input type="submit" value="Enviar">
    </form>
    <table>
        <thead>
            <tr>
                <th>ID Cliente</th>
                <th>ID Vendedor</th>
                <th>ID Producto</th>
                <th>Fecha Venta</th>
                <th>Cantidad Productos</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Step 1: Connect to the database
            $servername = "db";
            $username = "db";
            $password = "db";
            $dbname = "db";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Step 2: Query the database
            $sql = "SELECT * FROM venta";
            $result = $conn->query($sql);

            // Step 3: Fetch the data
            if ($result->num_rows > 0) {
                // Step 4: Display the data
                while($row = $result->fetch_assoc()) {
                    $c = $conn->query("SELECT nombre_usuario FROM cliente WHERE id =". $row['id_cliente']);
                    $v = $conn->query("SELECT nombre_vendedor FROM vendedor WHERE id =". $row['id_vendedor']);
                    $p = $conn->query("SELECT nombre_producto FROM producto WHERE id =". $row['id_producto'] );
                    echo "<tr>";
                    echo "<td>".$c->fetch_assoc()["nombre_usuario"]."</td>";
                    echo "<td>".$v->fetch_assoc()["nombre_vendedor"]."</td>";
                    echo "<td>".$p->fetch_assoc()["nombre_producto"]."</td>";
                    echo "<td>".$row["fecha_venta"]."</td>";
                    echo "<td>".$row["cantidad_productos"]."</td>";
                    echo "<td><button class='delete-btn' onclick='deleteUser(".$row["id"].")'>Delete</button></td>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }

            // Close connection
            $conn->close();
            ?>
        </tbody>
    </table>
    <script>
        function deleteUser(userId) {
            if (confirm("Are you sure you want to delete this user?")) {
                // Send an AJAX request to delete the user
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        location.reload(); // Reload the page after deletion
                    }
                };
                xhttp.open("GET", "delete.php?id=" + userId, true);
                xhttp.send();
            }
        }
    </script>
</body>