<!DOCTYPE html>
<html>
<head>
    <title>Formulario consulta de ventas</title>
</head>
<body>
    <h2>Consulta y Actualización de Registros</h2>
    <form action = "procesar.php" method = "POST">
        <label for = "tabla">Selecciona la tabla:</label>
        <select name = "tabla" id = "tabla">
            <option value = "cliente">Cliente</option>
            <option value = "producto">Producto</option>
            <option value = "vendedor">Vendedor</option>
            <option value = "venta">Venta</option>
        </select>
        <br><br>
        <label for ="accion">Selecciona la acción:</label>
        <select name ="accion" id="accion">
            <option value = "consultar">Consultar registro</option>
            <!--<option value = "actualizar">Actualizar registro</option>
            <option value = "insertar">Insertar nuevo registro</option>
            <option value = "eliminar">Eliminar registro</option>-->
        </select>
        <br><br>
        <label for = "id">ID del registro:</label>
        <input type = "text" name = "id" id = "id" placeholder="Ingrese un id">
        <br><br>
        <input type = "submit" value = "Ejecutar">
     </form>

</body>
</html>