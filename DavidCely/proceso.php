<!DOCTYPE html>
<html lang="es">
<head>
    <title>proceso PHP</title>
</head>
<body>
    <h1>proceso de PHP</h1>
    <?php

        include 'db/db.php';

        //var_dump($_POST);
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $edad = $_POST['edad'];
        $genero = $_POST['genero'];
        $preferencias = $_POST['preferencias'];
        $estado_civil = $_POST['estado_civil'];

        guardar_datos($nombre, $email, $edad, $genero, $preferencias, $estado_civil);

        header('Location: vistas/vistas.php');
    ?>
</body>
</html>