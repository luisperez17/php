<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio venta de productos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Centro de Venta IKEA</h2>
    <div class="container">
        <div class="form-container">
            <div class="form-add-venta">
                <h3>Añadir venta</h3>
                <form action="addVenta.php" method="POST">
                    <div class="input-container">
                        <label for="cliente">Cliente:</label>
                        <select name="cliente" id="cliente">
                            <?php
                                include './conexiondb.php';

                                $query = "SELECT * FROM cliente";
                                $result = get_data($query);

                                if (count($result) > 0) {
                                    foreach($result as $row) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nombre_usuario'] . "</option>";
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="input-container">
                        <label for="vendedor">Vendedor:</label>
                        <select name="vendedor" id="vendedor">
                            <?php
                                $query = "SELECT * FROM vendedor";
                                $result = get_data($query);

                                if (count($result) > 0) {
                                    foreach($result as $row) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nombre_vendedor'] . "</option>";
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="input-container">
                        <label for="producto">Producto:</label>
                        <select name="producto" id="producto">
                            <?php
                                $query = "SELECT * FROM producto";
                                $result = get_data($query);

                                if (count($result) > 0) {
                                    foreach($result as $row) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nombre_producto'] . "</option>";
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="input-container">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" name="cantidad" id="cantidad">
                    </div>
                    <div class="input-container">
                        <label for="fecha">Fecha:</label>
                        <input type="date" name="fecha" id="fecha">
                    </div>
                    <div class="input-container">
                        <input type="submit" value="Añadir venta">
                    </div>
                </form>
            </div>            
        </div>

        <div class="form-container">
            <div class="form-delete-venta">
                <h3>Eliminar venta</h3>
                <form action="deleteVenta.php" method="POST">
                    <div class="input-container">
                        <label for="id">ID:</label>
                        <input type="number" name="id" id="id">
                    </div>
                    <div class="input-container">
                        <input type="submit" value="Eliminar venta">
                    </div>
                </form>
            </div>
        </div>  

        <div class="form-container">
            <div class="form-update-venta">
                <h3>Actualizar venta</h3>
                <form action="updateVenta.php" method="POST">
                    <div class="input-container">
                        <label for="id">ID:</label>
                        <input type="number" name="id" id="id">
                    </div>
                    <div class="input-container">
                        <label for="cliente">Cliente:</label>
                        <select name="cliente" id="cliente">
                            <?php
                                $query = "SELECT * FROM cliente";
                                $result = get_data($query);

                                if (count($result) > 0) {
                                    foreach($result as $row) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nombre_usuario'] . "</option>";
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="input-container">
                        <label for="vendedor">Vendedor:</label>
                        <select name="vendedor" id="vendedor">
                            <?php
                                $query = "SELECT * FROM vendedor";
                                $result = get_data($query);

                                if (count($result) > 0) {
                                    foreach($result as $row) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nombre_vendedor'] . "</option>";
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="input-container">
                        <label for="producto">Producto:</label>
                        <select name="producto" id="producto">
                            <?php
                                $query = "SELECT * FROM producto";
                                $result = get_data($query);

                                if (count($result) > 0) {
                                    foreach($result as $row) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nombre_producto'] . "</option>";
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="input-container">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" name="cantidad" id="cantidad">
                    </div>
                    <div class="input-container">
                        <label for="fecha">Fecha:</label>
                        <input type="date" name="fecha" id="fecha">
                    </div>
                    <div class="input-container">
                        <input type="submit" value="Actualizar venta">
                    </div>
                </form>
            </div>
        </div>

        <div class="ventas-container">
            <h3>Ventas</h3>
            <table class="table-ventas">
                <thead>
                    <tr>
                        <th>ID Venta</th>
                        <th>Cliente</th>
                        <th>Vendedor</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Fecha de venta</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT v.id, c.nombre_usuario as nombre_cliente, vendedor.nombre_vendedor as nombre_vendedor, p.nombre_producto as nombre_producto, v.cantidad_productos as cantidad, v.fecha_venta as fecha_venta
                                    FROM venta v
                                    INNER JOIN cliente c ON v.id_cliente = c.id
                                    INNER JOIN producto p ON v.id_producto = p.id
                                    INNER JOIN vendedor vendedor ON v.id_vendedor = vendedor.id";

                        $result = get_data($query);
                        
                        if (count($result) > 0) {
                            foreach($result as $row) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['nombre_cliente'] . "</td>";
                                echo "<td>" . $row['nombre_vendedor'] . "</td>";
                                echo "<td>" . $row['nombre_producto'] . "</td>";
                                echo "<td>" . $row['cantidad'] . "</td>";
                                echo "<td>" . $row['fecha_venta'] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<div class='alert'> NO HAY VENTAS REGISTRADAS </div>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        

