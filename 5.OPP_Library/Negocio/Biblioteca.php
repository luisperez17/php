<?php
    class Biblioteca{
        private int $id;
        private String $nombre;
        private String $pais;
        private String $direccion;

        function __construct($id, $nombre, $pais, $direccion){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->pais = $pais;
            $this->direccion = $direccion;        
        }

        function setId($id) {
            $this->id=$id;
        }
        function setNombre($nombre) {
            $this->nombre=$nombre;
        }
        function setPais($pais) {
            $this->pais=$pais;
        }
        function setDireccion($direccion) {
            $this->direccion=$direccion;
        }

        function getId(){
            return $this->id;
        }
        function getNombre(){
            return $this->nombre;
        }
        function getPais(){
            return $this->pais;
        }
        function getDireccion(){
            return $this->direccion;
        }
        
    }
?>