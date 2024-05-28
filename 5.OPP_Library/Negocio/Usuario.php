<?php
    class Usuario{
        private  int $cedula;
        private  String $nombre;
        private  String $fechaNa;
        private  string $email;
        private  int $telefono;
        private  String $direccion;


        function __construct($cedula, $nombre, $fechaNa, $email, $telefono, $direccion){
            $this->cedula = $cedula;
            $this->nombre = $nombre;
            $this->fechaNa = $fechaNa;
            $this->email = $email;
            $this->telefono = $telefono;
            $this->direccion = $direccion;
        } 
    
        function setCedula($cedula) {
            $this->cedula=$cedula;
        }
        function setNombre($nombre) {
            $this->nombre=$nombre;
        }
        function setFechaNa($fechaNa) {
            $this->fechaNa=$fechaNa;
        }
        function setEmail($email) {
            $this->email=$email;
        }
        function setTelefono($telefono) {
            $this->telefono=$telefono;
        }
        function setDireccion($direccion) {
            $this->direccion=$direccion;
        }
    
        
        function getCedula(){
            return $this->cedula;
        }
        function getNombre(){
            return $this->nombre;
        }
        function getFechaNa(){
            return $this->fechaNa;
        }
        function getEmail(){
            return $this->email;
        }
        function getTelefono(){
            return $this->telefono;
        }
        function getDireccion(){
            return $this->direccion;
        }
    }  
    
    
?>