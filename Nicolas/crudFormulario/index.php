<!DOCTYPE html>
<html lang="es">
<head>
    <title>Actividad venta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Farmacias La Confiable</h2>
    <form action="procesar.php" method="POST">
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
    
    <form action="eliminar.php" method="POST">
        <input type="submit" value="Eliminar última venta" id="eliminado">
    </form>
</body>