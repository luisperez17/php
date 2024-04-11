<!DOCTYPE html>
<html lang="es">
<head>
    <title>Procesamiento PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Formulario PHP</h2>
    <?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];
    $preferencias = $_POST['preferencias'];
    $estado_civil = $_POST['estado_civil'];

    echo "<p>Nombre: $nombre</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Edad: $edad</p>";
    echo "<p>Genero: $genero</p>";
    echo "<p>Preferencias: $preferencias</p>";
    echo "<p>Estado_civil: $estado_civil</p>";
    ?>
</body>
</html>