<?php
    
    include_once '../../conexion_db/conexion.php';
    
    class cBiblioteca{

        function __construct(){
            $this->conn = new conexion(); 
        }
        
        function create($biblioteca){
            $id =  $biblioteca->getId();
            $nombre = $biblioteca->getNombre();
            $pais = $biblioteca->getPais();
            $direccion = $biblioteca->getDireccion();
            try {
                $var = $this->conn->connection()->prepare("INSERT INTO biblioteca (id, nombre, pais, direccion) VALUES (:id, :nombre, :pais, :direccion)");
                $var->bindParam(':id', $id);
                $var->bindParam(':nombre', $nombre);
                $var->bindParam(':pais', $pais);
                $var->bindParam(':direccion', $direccion);
                $var->execute(); # EXECUTE THE INSERT  
                echo "Registro insertado correctamente";       
            } catch (PDOException $e) {
                echo "Error al insertar registro: " . $e->getMessage();
            }
        }

        function delete($id){

            try {
                $var = $this->conn->connection()->prepare("DELETE FROM biblioteca WHERE id =:id");
                $var->bindParam(':id', $id);
                $var->execute(); # EXECUTE THE DELETE  
                echo "Registro borrado correctamente";       
            } catch (PDOException $e) {
                echo "Error al borrado registro: " . $e->getMessage();
            }
        }

        function read(){
            $var=null;
            try {
                $var = $this->conn->query("SELECT * FROM biblioteca");
                
                $records = "";
                foreach($var as $row){                 
                    $records .= "<tr>".
                        "<td>".$row['id']."</td>".
                        "<td>".$row['nombre']."</td>".
                        "<td>".$row['pais']."</td>".
                        "<td>".$row['direccion']."</td>".
                    "</tr>";
                }
                return "<table border=1px width=100%>"."<tr><th>id</th><th>nombre</th><th>pais</th><th>direccion</th></tr>".$records."</table>";
            } catch (PDOException $e) {
                echo "Error al leer registros: " . $e->getMessage();
            }  
            
        }

        function update($biblioteca){
            $id =  $biblioteca->getId();
            $nombre = $biblioteca->getNombre();
            $pais = $biblioteca->getPais();
            $direccion = $biblioteca->getDireccion();
            try {
                $var = $this->conn->connection()->prepare("UPDATE biblioteca SET nombre=:nombre, pais=:pais, direccion=:direccion WHERE id = :id");
                $var->bindParam(':id', $id);
                $var->bindParam(':nombre', $nombre);
                $var->bindParam(':pais', $pais);
                $var->bindParam(':direccion', $direccion);
                $var->execute(); # EXECUTE THE UPDATE  
                echo "Registro actualizado correctamente";       
            } catch (PDOException $e) {
                echo "Error al actualizado registro: " . $e->getMessage();
            }
        }
    }
?>