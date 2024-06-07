<?php
 
interface Humano{
    public function saludar();
}
 
class ConectorBD{
    private $conexion;  
    function __construct() {
        $this->conexion = new mysqli("localhost", "usuario", "contraseña", "base_datos");
        if ($this->conexion->connect_error) {
        die("Error de conexión: " . $this->conexion->connect_error);
        }
    }
    function _destruct() {
    $this->conexion->close();
    }
 
    function consultar($consulta) {
        $resultado = $this->conexion->query($consulta);
        return $resultado;
    }
}
 
class Usuario implements Humano{
    public $nombre;
    public $edad;
 
    function __construct($nombre,$edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
 
    function saludar(){
        echo "Hola me llamo " . $this->nombre;
    }
}
 
$sebas = new Usuario("Sebastian", 54);
$sebas->saludar();

?>