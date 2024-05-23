<?php

require 'Clases/Libro.php';
require 'Clases/Usuario.php';
require 'Clases/Biblioteca.php';

// Crear la biblioteca
$biblioteca = new Biblioteca();

// Crear y agregar libros
echo "Se crean los siguientes libros <br>";
$libro1 = new Libro("El Quijote", "1234567890", "Blue penguin", "Miguel de Cervantes");
$libro2 = new Libro("Maria antonieta", "2432423", "green penguin", "Mercedez de la cruz");
$biblioteca->agregarLibros($libro1);
$biblioteca->agregarLibros($libro2);

// Mostrar libros disponibles
$biblioteca->verLibros();
echo "<br>";

// Crear y registrar usuarios
echo "Se crean los siguientes usuarios <br>";
$usuario1 = new Usuario("Juan Pérez", "1", "2342342", "juan@gmail.com.co");
$biblioteca->agregarUsuarios($usuario1);

$biblioteca->verUsuarios();

// Prestar y devolver libros
$biblioteca->prestarLibro("1", "1234567890");

echo "<br> <br> Se prestó el libro " . $libro1->nombre . " a " . $usuario1->nombre;