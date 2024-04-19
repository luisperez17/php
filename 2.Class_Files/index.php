<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        ---------------ARCHIVO-----------------<br>
        <form action="procesaArchivo.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo" id="archivo" accept=".csv" /><br><br>
            <input type="submit" value="Enviar Archivo">
        </form>
        
</body>
</html>