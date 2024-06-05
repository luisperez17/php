<?php

    include 'interfaces/usuario.php';
    include 'conexion_phpmyadmin.php';

    class cuser implements usuario{
        private $email;
        private $contrasena;
        private $conn;

        function __construct($email, $contrasena){
            $this->email=$email;
            $this->contrasena=$contrasena;
            $this->conn = new conexion_phpmyadmin('db','db','db','db');
        }

        public function consulta_usuario($email){
            $var=null;
            try {
                $var = $this->conn->conexiondb()->prepare("SELECT * FROM users WHERE email=:email");
                $var->bindParam(':email', $email);
                $var->execute();
                
                $records = "";
                foreach($var as $row){                 
                    $records .= "<tr>".
                        "<td>".$row['email']."</td>".
                        "<td>".$row['contrasena']."</td>".
                    "</tr>";
                }
                return "<table border=1px width=100%>"."<tr><th>email</th><th>contrasena</th></tr>".$records."</table>";
            } catch (PDOException $e) {
                echo "Error al leer registros: " . $e->getMessage();
            }  
            
        }

        public function edicion_usuario($email, $contrasena){
            
            try {
                $var = $this->conn->conexiondb()->prepare("UPDATE users SET email =:email, contrasena=:contrasena WHERE email =:email");
                $var->bindParam(':email', $email);
                $var->bindParam(':contrasena', $contrasena);
                $var->execute(); # EXECUTE THE INSERT  
                echo "Registro insertado correctamente";       
            } catch (PDOException $e) {
                echo "Error al insertar registro: " . $e->getMessage();
            }
        }

        public function crear_usuario($email, $contrasena){
            
            try {
                $var = $this->conn->conexiondb()->prepare("INSERT INTO users (email, contrasena) VALUES (:email, :contrasena)");
                $var->bindParam(':email', $email);
                $var->bindParam(':contrasena', $contrasena);
                $var->execute(); # EXECUTE THE INSERT  
                echo "Registro insertado correctamente";       
            } catch (PDOException $e) {
                echo "Error al insertar registro: " . $e->getMessage();
            }
        }
    }

?>