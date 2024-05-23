<?php
class Usuario{
    //Atributos
    public $nombre;
    public $id;
    public $telefono;
    public $email;
    public $librosPrestados;

    //Constructor
    public function __construct($nombre, $id, $telefono, $email){
    $this->nombre = $nombre;
    $this->id = $id;
    $this->telefono = $telefono;
    $this->email = $email;
    $this->librosPrestados = [];
    }

    //Métodos get
    public function getNombre(){
        return $this->nombre;
    }

    public function getId(){
        return $this->id;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getLibrosPrestados() {
        return $this->librosPrestados;
    }


    //Métodos set
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function prestarLibro($libro) {
        $this->librosPrestados[] = $libro;
    }

}
?>
