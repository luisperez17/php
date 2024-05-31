<?php
include './clases/Biblioteca.php';
include './clases/Libro.php';
include './clases/Usuario.php';

// Crear instancias de libros
$libro1 = new Libro("El Quijote", "Miguel de Cervantes", "1234567890", "Planeta", "2012");
$libro2 = new Libro("Cien Años de Soledad", "Gabriel García Márquez", "0987654321", "Planeta", "2007");

// Crear instancias de usuarios
$usuario1 = new Usuario("Juan Perez", 1, "1234567890", "3123454321", "Juan@gmail.com");
$usuario2 = new Usuario("Maria Gomez", 2, "0987654321", "3120986725", "Maria@gmail.com");

// Crear instancia de Biblioteca y agregar libros y usuarios
$biblioteca = new Biblioteca();
$biblioteca->agregarLibro($libro1);
$biblioteca->agregarLibro($libro2);
$biblioteca->agregarUsuario($usuario1);
$biblioteca->agregarUsuario($usuario2);

// Mostrar libros y usuarios
$biblioteca->mostrarLibros();
$biblioteca->mostrarUsuarios();

// Crear prestamo
$prestamo1 = $biblioteca->registrarPrestamo($usuario1->getIdUsuario(), $libro1-> getIsbn());
if ($prestamo1) {
    echo "Prestamo 1 exitoso";
} else {
    echo "Prestamo 1 fallido";
}
$prestamo2 = $biblioteca->registrarPrestamo($usuario2->getIdUsuario(), $libro2-> getIsbn());
if ($prestamo2) {
    echo "Prestamo 2 exitoso";
} else {
    echo "Prestamo 2 fallido";
}
// Mostrar prestamos
$biblioteca->mostrarPrestamos();
?>
