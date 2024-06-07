<?php

interface Figura{
    //Las funciones siempre deben ser públicas
    public function calcularArea();
    public function calcularPerimetro();
}

class Cuadrado implements Figura{
    private $lado;
    public function __construct($lado){
        $this->lado = $lado;
    }

    public function calcularArea(){
        return $this->lado * $this->lado;
    }

    public function calcularPerimetro(){
        return 4 * $this->lado;
    }
}
$cuadrado = new CUadrado(5);
echo "Área del cuadrado" . $cuadrado->calcularArea(). "<br>";