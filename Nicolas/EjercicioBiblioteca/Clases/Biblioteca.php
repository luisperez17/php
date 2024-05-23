<?php
class Biblioteca {
    public $usuariosArray;
    public $librosArray;

    public function __construct() {
        $this->usuariosArray = [];
        $this->librosArray = [];
    }

    public function agregarLibros($libro) {
        $this->librosArray[$libro->getId()] = $libro;
    }

    public function verLibros() {
        foreach ($this->librosArray as $libro) {
            echo "Nombre: " . $libro->getNombre()  . ", Id: " . $libro->getId() . ", Editorial: " . $libro->getEditorial() . ", Autor: " . $libro->getAutor() . "<br>";
        }
    }

     public function agregarUsuarios($usuario) {
        $this->usuariosArray[$usuario->getId()] = $usuario; 

    }

    public function verUsuarios() {
        foreach ($this->usuariosArray as $usuario) {
            echo "Nombre: " . $usuario->getNombre() . ", Id: " . $usuario->getId() . ", Telefono: " . $usuario->getTelefono() . ", Email: " . $usuario->getEmail() . "\n";
        }
    }

    public function prestarLibro($idUsuario, $id) {
            $usuario = $this->usuariosArray[$idUsuario];
            $libro = $this->librosArray[$id];
            $usuario->prestarLibro($libro);
            echo "<br> Libro prestado con éxito.\n";
    
    }

    public function devolverLibro($idUsuario, $id) {
            $usuario = $this->usuariosArray[$idUsuario];

    }
}