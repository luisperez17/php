<?php
class Libro {
    // Declaracion de atributos
    private $titulo;
    private $autor;
    private $isbn;
    private $editorial;
    private $year;

    // Declaracion de metodos

    // Constructor de clase Libro
    public function __construct($titulo, $autor, $isbn, $editorial, $year) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->isbn = $isbn;
        $this->editorial = $editorial;
        $this->year = $year;
    }

    // Getters y Setters
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getEditorial() {
        return $this->editorial;
    }

    public function getYear() {
        return $this->year;
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setEditorial($editorial) {
        $this->editorial = $editorial;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function setIsbn($isbn) {
        $this->isbn = $isbn;
    }
}

?>
