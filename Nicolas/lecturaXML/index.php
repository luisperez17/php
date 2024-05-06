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
            
    $libros = simplexml_load_file("libros.xml");
    print "total de libros: ". $libros ->count(). "<hr>"; #Me muestra la cantidad de libros que hay en el xml
    if($libros ===FALSE){
        foreach(libxml_get_errors() as $error){
            print "Nivel: ".error -> level."<br>";
            print "codigo: ".error -> code."<br>";
            print "columna: ".error -> column."<br>";
            print "mensaje: ".error -> message."<br>";
            print "archivo: ".error -> file."<br>";
            print "linea: ".error -> line."<br>";
        }
    }else{
        foreach($libros as $libro){
            print $libro->titulo. "<br>";
            print $libro->titulo["paginas"]. "<br>";
            print $libro->autor->nombre. "";
            print $libro->autor->apellidos. "";
            print $libro->editiorial. "<br>";
            print $libro->fecha. "<br>";
        }
       
    }

       


        
    ?>
</head>
<body>
</body>

    