<?php
    class conexion {
        private $host;
        private $dbname;
        private $username;
        private $pass;
        private $conn;
        private $dns;

        public function __construct(){
            $this->host = 'db';
            $this->dbname = 'db';
            $this->username = 'db';
            $this->pass = 'db';
            $this->dns = "mysql:host=$this->host;dbname=$this->dbname";                

            try {
                $this->conn = new PDO($this->dns, $this->username, $this->pass);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            } catch (PDOException $e) {
                echo "Error de conexion: " . $e->getMessage();
            }
        }

        public function __destruct() {
            return $this->conn = null;
        }

        public function connection() {
            return $this->conn;
        }
        public function query($sql){
            return $this->conn->query($sql);
        }
        
    }
?>