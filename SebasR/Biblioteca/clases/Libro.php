<?php
class Libro {
    //Atributos
    public $nombre;
    public $autor;
    public $id;
 
    //Constructor
    public function __construct($nombre, $autor,$id){
        $this->nombre = $nombre;
        $this->autor = $autor;
        $this->id = $id;
    }
 
    //Métodos get
    public function getNombre(){
        return $this->nombre;
    }
 
 
    public function getAutor(){
        return $this->autor;
    }

    public function getId(){
        return $this->id;
    }
 
    //Métodos set
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
 
    public function setAutor($autor){
        $this->autor = $autor;
    }
 
}
?>