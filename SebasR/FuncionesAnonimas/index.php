<!DOCTYPE html>
<html>
    <head>
        <title>Sesion php</title>
        <meta charset="utf-8">
    </head>
    <?php
    $numeros = [3,4,5,11,10,45,57,95,3];
    $numero_incrementado = array_filter($numeros,funcion($n){
        return $n % 5 == 0;
    });
    echo "<pre>";
    print_r($numero_incrementado)

    ?>
    <body>
    </body>
</html>