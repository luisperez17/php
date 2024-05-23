<?php
class Usuario{
    //Atributos
    public $nombre;
    public $id;
    public $libros = array();
 
    //Constructor
    public function __construct($nombre, $id){
    $this->nombre = $nombre;
    $this->id = $id;
    }
 
    //Métodos get
    public function getNombre(){
        return $this->nombre;
    }
 
    public function getId(){
        return $this->id;
    }
    
    public function getLibros(){
        foreach ($this->libros as $libro) {
            if(isset($libro)){
                echo "Libros prestados a ".$this->nombre.": Título: " . $libro ."<br>";
            }else{
                echo "El usuario ".$this->nombre." No tiene libros prestados<br>";
            }
        }
    }
 
    //Métodos set
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
 
    public function setId($id){
        $this->id = $id;
    }

    public function prestarLibro($libro){
        $this->libros[]= $libro;
    }
    
    public function devolverLibro($libro){
        $posicion = array_search($libro, $this->libros);
    
        // Si el elemento existe en el array, eliminarlo
        if ($posicion !== false) {
            unset($this->libros[$posicion]);
            return true;
        }
    }
}
?>