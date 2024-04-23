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
        include 'conexiondb/conexiondb.php';

        //Variables$POST
        $nombre = $_POST['nombre'];
        $email = $_POST["email"];
        $edad = $_POST["edad"];
        $genero = $_POST["genero"];
        $preferencias = $_POST["preferencias"];
        $estado_civil = $_POST["estado_civil"];

        guardarDatos($nombre, $email, $edad, $genero, $preferencias, $estado_civil);


        header("Location: vista/vista.php")
    ?>

</body>
</html>