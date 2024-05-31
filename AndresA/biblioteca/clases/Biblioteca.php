<?php
class Biblioteca {
    // Declaracion de atributos
    private $libros = [];
    private $usuarios = [];
    private $prestamos = [];

    // Declaracion de metodos

    // Metodo para agregar un libro a la biblioteca
    public function agregarLibro(Libro $libro) {
        $this->libros[] = $libro;
    }

    // Metodo para agregar un usuario a la biblioteca
    public function agregarUsuario(Usuario $usuario) {
        $this->usuarios[] = $usuario;
    }

    // Metodos para mostrar los libros de la biblioteca
    public function mostrarLibros() {
        foreach ($this->libros as $libro) {
            echo "Título: " . $libro->getTitulo() . ", Autor: " . $libro->getAutor() . ", ISBN: " . $libro->getIsbn() . ", Editorial: " . $libro->getEditorial() . ", Año: " . $libro->getYear() . "\n";
        }
    }

    // Metodos para mostrar los usuarios de la biblioteca
    public function mostrarUsuarios() {
        foreach ($this->usuarios as $usuario) {
            echo "Nombre: " . $usuario->getNombre() . ", ID Usuario: " . $usuario->getIdUsuario() . ", Cedula: " . $usuario->getCedula() . ", Telefono: " . $usuario->getTelefono() . ", Email: " . $usuario->getEmail() . "\n";
        }
    }

    // Metodo para registrar un prestamo de libro a un usuario
    public function registrarPrestamo($idUsuario, $isbn) {
        //Verificacion de la existencia del libro y del usuario
        if (!isset($this->libros[$isbn]) || !isset($this->usuarios[$idUsuario])) {
            return false;
        }
        // Agregar el prestamo al arreglo de prestamos
        $this->prestamos[] = new Prestamo($this->libros[$isbn], $this->usuarios[$idUsuario]);
        return true;

    }

    // Metodo para retirar un prestamo de libro de un usuario
    public function retirarPrestamo($idUsuario, $isbn) {
        // Verificacion de la existencia del usuario y del libro
        if (!isset($this->libros[$isbn]) || !isset($this->usuarios[$idUsuario])) {
            return false;
        }
        // Buscar el prestamo en la matriz de prestamos
        foreach ($this->prestamos as $prestamo) {
            if ($prestamo->getLibro()->getIsbn() === $isbn && $prestamo->getUsuario()->getIdUsuario() === $idUsuario) {
                // Eliminar el prestamo de la matriz de prestamos
                unset($this->prestamos[$prestamo]);
                return true;
            }
        }
        return false;
    }   

    // Metodo para mostrar los prestamos de libros de la biblioteca
    public function mostrarPrestamos() {
        foreach ($this->prestamos as $prestamo) {
            echo "Título: " . $prestamo->getLibro()->getTitulo() . ", ISBN: " . $prestamo->getLibro()->getIsbn() . ", Cedula: " . $prestamo->getUsuario()->getCedula() . ", Nombre: " . $prestamo->getUsuario()->getNombre() . "\n";
        }
    }
}
?>
