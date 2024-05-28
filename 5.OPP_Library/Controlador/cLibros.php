<?php
    
    include_once '../../conexion_db/conexion.php';
    
    class cLibros{

        function __construct(){
            $this->conn = new conexion(); 
        }
        
        function create($libro){
            $id =  $libro->getId();
            $nombre = $libro->getNombre();
            $autor = $libro->getAutor();
            $editorial = $libro->getEditorial();
            $categoria = $libro->getCategoria();
            $paginas = $libro->getPaginas();
            $fecha_Publicacion = $libro->getFecha_publicacion();
            try {
                $var = $this->conn->connection()->prepare("INSERT INTO libro (id, nombre, autor, editorial, categoria, paginas, fecha_Publicacion) VALUES (:id, :nombre, :autor, :editorial, :categoria, :paginas, :fecha_Publicacion)");
                $var->bindParam(':id', $id);
                $var->bindParam(':nombre', $nombre);
                $var->bindParam(':autor', $autor);
                $var->bindParam(':editorial', $editorial);
                $var->bindParam(':categoria', $categoria);
                $var->bindParam(':paginas', $paginas);
                $var->bindParam(':fecha_Publicacion', $fecha_Publicacion);
                $var->execute(); # EXECUTE THE INSERT  
                echo "Registro insertado correctamente";       
            } catch (PDOException $e) {
                echo "Error al insertar registro: " . $e->getMessage();
            }
        }

        function delete($id){

            try {
                $var = $this->conn->connection()->prepare("DELETE FROM libro WHERE id =:id");
                $var->bindParam(':id', $id);
                $var->execute(); # EXECUTE THE DELETE  
                echo "Registro borrado correctamente";       
            } catch (PDOException $e) {
                echo "Error al insertar registro: " . $e->getMessage();
            }
        }

        function read(){
            $var=null;
            try {
                $var = $this->conn->query("SELECT * FROM libro");
                
                $records = "";
                foreach($var as $row){                 
                    $records .= "<tr>".
                        "<td>".$row['id']."</td>".
                        "<td>".$row['nombre']."</td>".
                        "<td>".$row['autor']."</td>".
                        "<td>".$row['editorial']."</td>".
                        "<td>".$row['categoria']."</td>".
                        "<td>".$row['paginas']."</td>".
                        "<td>".$row['fecha_publicacion']."</td>".
                    "</tr>";
                }
                return "<table border=1px width=100%>"."<tr><th>id</th><th>nombre</th><th>autor</th><th>editorial</th><th>categoria</th><th>paginas</th><th>fecha_Publicacion</th></tr>".$records."</table>";
            } catch (PDOException $e) {
                echo "Error al leer registros: " . $e->getMessage();
            }  
            
        }

        function update($libro){
            $id =  $libro->getId();
            $nombre = $libro->getNombre();
            $autor = $libro->getAutor();
            $editorial = $libro->getEditorial();
            $categoria = $libro->getCategoria();
            $paginas = $libro->getPaginas();
            $fecha_Publicacion = $libro->getFecha_publicacion();
            try {
                $var = $this->conn->connection()->prepare("UPDATE libro SET id=:id, nombre=:nombre, autor=:autor, editorial=:editorial, categoria=:categoria, paginas=:paginas, fecha_Publicacion=:fecha_Publicacion WHERE id=:id");
                $var->bindParam(':id', $id);
                $var->bindParam(':nombre', $nombre);
                $var->bindParam(':autor', $autor);
                $var->bindParam(':editorial', $editorial);
                $var->bindParam(':categoria', $categoria);
                $var->bindParam(':paginas', $paginas);
                $var->bindParam(':fecha_Publicacion', $fecha_Publicacion);
                $var->execute(); # EXECUTE THE INSERT  
                echo "Registro actualizado correctamente";          
            } catch (PDOException $e) {
                echo "Error al actualizado registro: " . $e->getMessage();
            }
        }
    }
?>