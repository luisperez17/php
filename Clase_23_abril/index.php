<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

        libxml_use_internal_errors(true);
        $libros = simplexml_load_file("libros.xml");

        if ($libros === false) {
            foreach (libxml_get_errors() as $error){
                print "Nivel: ". $error->level. "<br>";
                print "Codigo: ". $error->code. "<br>";
                print "Columna: ". $error->column. "<br>";
                print "Mensaje: ". $error->message. "<br>";
                print "Archivo: ". $error->file. "<br>";
                print "Linea: ". $error->line. "<br>";
            }
        }else{
            foreach($libros as $libro){
                print $libro->titulo. "<br>";
                print $libro->titulo["paginas"]. "<br>";
                print $libro->autor->nombre. " ";
                print $libro->autor->apellidos. "<br>";
                print $libro->editorial. "<br>";
                print $libro->fecha. "<br>";
                print "<hr>";
                if ($libro->autor->nombre == "Mario"){
                    setcookie('user_name', $libro->autor->nombre, [
                        'expires' => 10000, // segundos
                        'path' => '/',
                    ]);
                    print("se ha creado una cookie con clave valor user_name=Mario");

                    print("Seras redireccionado en 10 segundos de forma permanente");
                    
                    header("Location: /vista.html");
                    
                }else{
                    print("no es mario");
                }
            }
        }
            
    ?>


</head>
<body>
    
</body>
</html>