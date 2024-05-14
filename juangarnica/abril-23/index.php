<!DOCTYPE html>
<html>
<head>
    <title>Sesion PHP</title>
    <meta charset="utf-8">
    <?php
        //header('Location; nueva_pagina.php', true, 301);
        //exit();

        setcookie('nombre_usuario', 'Juan',[
            'expires' => time () + (86400 * 30),
            'path' => '/',
            'domain' => $_SERVER['HTTP_HOST'],
            'secure' => true,
            'httponly' => true,
            'samesite' => 'Strict'
        ]);

        echo "Cookie guardada"."<br>";

        libxml_use_internal_errors(true);
        $libros = simplexml_load_file("libros.xml");
        print "Total de libros: ". $libros->count()."<hr>"; 

        foreach ($libros as $libro) {
            if($libro->editorial == "Oveja Negra"){
                print $libro->titulo. "<br>";
                print $libro->titulo["paginas"]. "<br>";
                print $libro->autor->nombre."<br>";
                print $libro->autor->apellidos."<br>";
                print $libro->editorial."<br>";
                print $libro->fecha."<br>";
                print "<hr>";
            }
        }

        //if ($libros === false) {
            //foreach (libxml_use_internal_errors() as $error) {
                //print "Nivel: ". $error->level. "<br>";
                //print "Codigo: ". $error->code. "<br>";
                //print "Columna: ". $error->column. "<br>";
                //print "Mensaje: ". $error->message. "<br>";
                //print "Archivo: ". $error->file. "<br>";
                //print "Linea: ". $error->line. "<br>";
            //}
        //}else{
            //foreach ($libros as $libro) {
                //print $libro->titulo. "<br>";
                //print $libro->titulo["paginas"]. "<br>";
                //print $libro->autor->nombre."<br>";
                //print $libro->autor->apellidos."<br>";
                //print $libro->editorial."<br>";
                //print $libro->fecha."<br>";
                //print "<hr>";
            //}
        //}
    ?>

</head>
<body>

</body>
</html>