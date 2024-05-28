<?php
    
    include_once '../../conexion_db/conexion.php';
    
    class cUsuario{

        function __construct(){
            $this->conn = new conexion(); 
        }
        
        function create($usuario){
            $cedula = $usuario->getCedula();
            $nombre = $usuario->getNombre();
            $fechaNa = $usuario->getFechaNa();
            $email = $usuario->getEmail();
            $telefono = $usuario->getTelefono();
            $direccion = $usuario->getDireccion();
            
            try {
                $var = $this->conn->connection()->prepare("INSERT INTO usuario (cedula, nombre, fechaNa, email, telefono, direccion) VALUES (:cedula, :nombre, :fechaNa, :email, :telefono ,:direccion)");
                $var->bindParam(':cedula', $cedula);
                $var->bindParam(':nombre', $nombre);
                $var->bindParam(':fechaNa', $fechaNa);
                $var->bindParam(':email', $email);
                $var->bindParam(':telefono', $telefono);
                $var->bindParam(':direccion', $direccion);
                $var->execute(); # EXECUTE THE INSERT  
                echo "Registro insertado correctamente";       
            } catch (PDOException $e) {
                echo "Error al insertar registro: " . $e->getMessage();
            }
        }

        function delete($cedula){

            try {
                $var = $this->conn->connection()->prepare("DELETE FROM usuario WHERE cedula =:cedula");
                $var->bindParam(':cedula', $cedula);
                $var->execute(); # EXECUTE THE DELETE  
                echo "Registro borrado correctamente";       
            } catch (PDOException $e) {
                echo "Error al borrado registro: " . $e->getMessage();
            }
        }

        function read(){
            $var=null;
            try {
                $var = $this->conn->query("SELECT * FROM usuario");
                
                $records = "";
                foreach($var as $row){                 
                    $records .= "<tr>".
                        "<td>".$row['ceula']."</td>".
                        "<td>".$row['nombre']."</td>".
                        "<td>".$row['fechaNa']."</td>".
                        "<td>".$row['email']."</td>".
                        "<td>".$row['telefono']."</td>".
                        "<td>".$row['direccion']."</td>".
                    "</tr>";
                }
                return "<table border=1px width=100%>"."<tr><th>cedula</th><th>nombre</th><th>fecha Nacimiento</th><th>email</th><th>telefono</th><th>direccion</th></tr>".$records."</table>";
            } catch (PDOException $e) {
                echo "Error al leer registros: " . $e->getMessage();
            }  
            
        }

        function update($usuario){
            $cedula =  $usuario->getCedula();
            $nombre = $usuario->getNombre();
            $fechaNa = $usuario->getFechaNa();
            $email = $usuario->getEmail();
            $telefono = $usuario->getTelefono();
            $direccion = $usuario->getDireccion();
            try {
                $var = $this->conn->connection()->prepare("UPDATE usuario SET cedula=:cedula, nombre=:nombre, fechaNa=:fechaNa, email=:email, telefono=:telefono, direccion=:direccion WHERE cedula=:cedula");
                $var->bindParam(':cedula', $cedula);
                $var->bindParam(':nombre', $nombre);
                $var->bindParam(':fechaNa', $fechaNa);
                $var->bindParam(':email', $email);
                $var->bindParam(':telefono', $telefono);
                $var->bindParam(':direccion', $direccion);
                $var->execute(); # EXECUTE THE INSERT  
                echo "Registro actualizado correctamente";       
            } catch (PDOException $e) {
                echo "Error al actualizado registro: " . $e->getMessage();
            }
        }
    }
?>