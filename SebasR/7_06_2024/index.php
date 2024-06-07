<?php

require_once '../../../vendor/autoload.php';

use Monolog\logger;
use Monolog\Handler\StreamHandler;

$log = new logger('Personas');
$log->PushHandler(new StreamHandler(__DIR__ . 'personas.log',logger::INFO));

class Persona{
    public $nombre;
    public $edad;
    public function __construct($nombre,$edad,$log){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $log->critical("Creando una persona: Nombre = $nombre, Edad: $edad");
    }
    public function saludar($log){
        $mensaje = "hola soy $this->nombre y tengo $this->edad";
        $log->notice("Saludando = $mensaje");

    }
}

$personas = [
    new persona("juan",20,$log),
    new persona("ana",10,$log),
    new persona("pedro",25,$log),
];

foreach ($personas as $persona){
    echo $persona->saludar($log) . "<br>";
}

?>