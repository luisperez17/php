<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesamiento PHP</title>
</head>
<body>
    <h2>Procesamiento PHP</h2>
    <?php
    $nombre = $_POST['nombre'];
    $email = $_POST["email"];
    $edad = $_POST["edad"];
    $genero = $_POST["genero"];
    $preferencias = $_POST["preferencias"];
    $estado_civil = $_POST["estado_civil"];

    echo "<p>Nombre: $nombre</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Edad: $edad</p>";
    echo "<p><Genero: $genero</p>";
    echo "<p>Preferencias: $preferencias</p>";
    echo "<p>Estado civil: $estado_civil</p>"
    ?>

    
</body>
</html>