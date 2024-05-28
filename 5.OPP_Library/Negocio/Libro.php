<?php
    class Libro{
        private int $id;
        private String $nombre;
        private String $autor;
        private String $editorial;
        private String $categoria;
        private int $paginas;
        private String $fecha_publicacion;

        function __construct($id, $nombre, $autor, $editorial, $categoria, $paginas, $fecha_publicacion){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->autor = $autor;
            $this->editorial = $editorial;
            $this->categoria = $categoria;
            $this->paginas = $paginas;
            $this->fecha_publicacion = $fecha_publicacion;
        }

        function setId($id) {
            $this->id=$id;
        }
        function setNombre($nombre) {
            $this->nombre=$nombre;
        }
        function setAutor($autor) {
            $this->autor=$autor;
        }
        function setEditorial($editorial) {
            $this->editorial=$editorial;
        }
        function setCategoria($categoria) {
            $this->categoria=$categoria;
        }
        function setPaginas($paginas) {
            $this->paginas=$paginas;
        }
        function setFecha_publicacion($fecha_publicacion) {
            $this->fecha_publicacion=$fecha_publicacion;
        }

        function getId(){
            return $this->id;
        }
        function getNombre(){
            return $this->nombre;
        }
        function getAutor(){
            return $this->autor;
        }
        function getEditorial(){
            return $this->editorial;
        }
        function getCategoria(){
            return $this->categoria;
        }
        function getPaginas(){
            return $this->paginas;
        }
        function getFecha_publicacion(){
            return $this->fecha_publicacion;
        }
    }

?>