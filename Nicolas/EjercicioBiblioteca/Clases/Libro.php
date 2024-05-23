<?php
class Libro {
    //Atributos
    public $nombre;
    public $id;
    public $editorial;
    public $autor;


    //Constructor
    public function __construct($nombre, $id, $editorial, $autor){
        $this->nombre = $nombre;
        $this->id = $id;
        $this->editorial = $editorial;
        $this->autor = $autor;
    }

    //Métodos get
    public function getNombre(){
        return $this->nombre;
    }

    public function getId(){
        return $this->id;
    }

    public function getEditorial(){
        return $this->editorial;
    }

    public function getAutor(){
        return $this->autor;
    }


    //Métodos set
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setEditorial($editorial){
        $this->editorial = $editorial;
    }

    public function setAutor($autor){
        $this->autor = $autor;
    }

}
?>