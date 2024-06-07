<?php

class Persona {
    public $nombre;
    public $edad;

    function __construct($nombre,$edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    
}

$persona1 = new Persona("Juan", 30);
$persona2 = new Persona("María", 25);

echo "Nombre de persona 1" . $persona1->nombre - "\n";
echo "Edad de persona2" . $persona2->edad . "\n";