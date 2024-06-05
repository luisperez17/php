<?php

    include 'interfaces/conexion.php';
    class conexion_phpmyadmin implements conexion{
        private $host;
        private $dbname;
        private $username;
        private $pass;
        private $conn;
        private $dns;

        public function __construct($host, $dbname, $username, $pass){
            $this->host =$host;
            $this->dbname =$dbname;
            $this->username =$username;
            $this->pass =$pass;
            
        }

        function conexiondb(){
            $this->dns = "mysql:host=$this->host;dbname=$this->dbname";                

            try {
                $this->conn = new PDO($this->dns, $this->username, $this->pass);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->conn;
            } catch (PDOException $e) {
                echo "Error de conexion: " . $e->getMessage();
            }
        }
        
        public function desconectardb(){
            if($this->conn){
                $this->conn = null;
            }
        }

        public function __destruct() {
            $this->desconectardb();
        }
        
    }

?>