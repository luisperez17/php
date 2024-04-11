<!DOCTYPE html>
<html lang="es">
<head>
    <title>Procesamiento PHP</title>
</head>
<body>
    <h2>Procesamiento PHP</h2>
    <?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];
    $preferencias = $_POST['preferencias'];
    $estado_civil = $_POST['estado_civil'];

    echo "<p>Nombre: $nombre</p>";
    echo "<p>email: $email</p>";
    echo "<p>edad: $edad</p>";
    echo "<p>genero: $genero</p>";
    echo "<p>preferencias: $preferencias</p>";
    echo "<p>estado_civil: $estado_civil</p>";
    ?>
</body>
</html>