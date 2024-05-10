<!DOCTYPE html>
<html lang="es">
<head>
    <title>Insertar archivo CSV</title>
    <meta charset="utf-8">
</head>
<body>
    <form action="procesarArchivo.php" method="POST" enctype="multipart/form-data">
        <div>
            <label for="archivo">Subir archivo:</label>
            <input type="file" name="archivo" id="archivo" accept="csv">
        </div>
        <br>
        <div>
            <input type="submit" value="Enviar">
        </div>
</body>
</html>