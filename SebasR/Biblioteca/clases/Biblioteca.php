<?php

class Biblioteca {
    private $libros;
    private $usuarios;
 
    public function __construct() {
        $this->libros = [];
        $this->usuarios = [];
    }
 
    // Métodos para gestionar libros
    public function agregarLibros($libro) {
        $this->libros[$libro->getId()] = $libro;
    }
 
    public function mostrarLibros() {
        foreach ($this->libros as $libro) {
            echo "Título: " . $libro->getNombre() . ", Autor: " . $libro->getAutor() . ", ISBN: " . $libro->getId() . "<br>";
        }
    }
 
    // Métodos para gestionar usuarios
    public function registrarUsuario($usuario) {
        $this->usuarios[$usuario->getId()] = $usuario;
    }
 
    // Métodos para prestar y devolver libros
    public function prestarLibro($idUsuario, $id) {
        if (isset($this->usuarios[$idUsuario]) && isset($this->libros[$id])) {
            $usuario = $this->usuarios[$idUsuario];
            $libro = $this->libros[$id];
 
            $usuario->prestarLibro($libro->getNombre());
            echo "Libro prestado con éxito.<br>";
        } else {
            echo "No se puede prestar el libro. Verifique si el usuario o el libro existen, y si el libro está disponible.<br>";
        }
    }
 
    public function devolverLibro($idUsuario, $id) {
        if (isset($this->usuarios[$idUsuario]) && isset($this->libros[$id])) {
            $usuario = $this->usuarios[$idUsuario];
 
            if ($usuario->devolverLibro($this->libros[$id]->getNombre())) {
                echo "Libro devuelto con éxito.<br>";
            } else {
                echo "El usuario no tiene este libro prestado.<br>";
            }
        } else {
            echo "No se puede devolver el libro. Verifique si el usuario o el libro existen.<br>";
        }
    }
}

?>
