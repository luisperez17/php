<!DOCTYPE html>
<html lang="es">
<head>
    <title>Sesión PHP Cookies</title>
    <meta charset="utf-8">
    <?php

    setcookie('nombre_usuario', 'Nico', [
        'expires' => time() + (86400 *30),
        'path' => '/',
        'domain' => $_SERVER['HTTP_HOST'],
        'secure' => true,
        'httponly' => true,
        'samesite' => 'Strict'
    ]);

    echo "Cookie guardada"
    ?>
</head>
<body>
</body>

    