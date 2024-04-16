<?php

    include 'modelo/modelo.php';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];
    $preferencias = $_POST['preferencias'];
    $estado_civil = $_POST['estado_civil'];

    guardarDatos($nombre, $email, $edad, $genero, $preferencias, $estado_civil);

    header("Location: /vista/vista.php");
?>