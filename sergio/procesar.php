<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Procesamiento PHP</title>
    </head>
    <body>
        <h2>Procesamiento PHP </h2>
        <?php
        var_dump($_POST);
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $edad = $_POST['edad'];
        $genero = $_POST['genero'];
        $preferencias = $_POST['preferencias'];
        $estado_civil = $_POST['estado_civil'];

        ?>
    </body>
    </html>