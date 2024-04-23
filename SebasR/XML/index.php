<!DOCTYPE html>
<html lang="es">
<head>
    <title>Sesión PHP</title>
    <meta charset="utf-8">
    <?php
    //Forma 1
        //$libros = simplexml_load_file("libros,xml");
 
        // $autos = <<< END
        // <autos>
        //     <auto>
        //         <marca>Ford</marca>
        //         <color>Rojo</color>
        //     </auto>
        //     <auto>
        //         <marca>Ford</marca>
        //         <color>Rojo</color>
        //     </auto>
        // </autos>
        // END;
        // print "<pre>";
        // print var_dump ($autos);
        // print "</pre>";
    //Forma 2
        // $libros2 = new SimpleXMLElement("libros.xml, null, true");
        // print "<pre>";
        // print var_dump ($libros2);
        // print "</pre>";
    //Forma 3
        $oveja_negra = new ArrayObject();
$libros = simplexml_load_file("libros.xml");
print "total de libros: ". $libros->count(). "<hr>";

foreach($libros as $libro){
    if($libro->editorial == "Oveja Negra"){
        $oveja_negra->append($libro);
        print "hola";
    }
}

if($oveja_negra !== FALSE){
    foreach($oveja_negra as $libro){
        print $libro->titulo. "<br>";
        print $libro->titulo["paginas"]. "<br>";
        print $libro->autor->nombre. "";
        print $libro->autor->apellidos. "";
        print $libro->editorial. "<br>";
        print $libro->fecha. "<br>";
    }
} else {
    foreach(libxml_get_errors() as $error){
        print "Nivel: ". $error->level. "<br>";
        print "codigo: ". $error->code. "<br>";
        print "columna: ". $error->column. "<br>";
        print "mensaje: ". $error->message. "<br>";
        print "archivo: ". $error->file. "<br>";
        print "linea: ". $error->line. "<br>";
    }
}

setcookie("usuario", "Sebas", [
    "expires" => time() + 86400 + 30,
    "path" => "/",
    "domain" => $_SERVER["HTTP_HOST"],
    "secure" => true,
    "httponly" => true,
    "samesite" => "Strict",
]);

    
    session_start();
    $_SESSION["usuario"] = "Juan";
    $_SESSION["editorial"] = "oveja negra";
    
    ?>
</head>
<body>
</body>