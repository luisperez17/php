<?php

    include 'clases/Biblioteca.php';
    include 'clases/Libro.php';
    include 'clases/Usuario.php';

    // Crear la biblioteca
    $biblioteca = new Biblioteca();
    
    // Crear y agregar libros
    echo("Agregando libros a la biblioteca<br>");
    $libro1 = new Libro("El Quijote", "Miguel de Cervantes", "1234567890");
    $libro2 = new Libro("1984", "George Orwell", "1234567891");
    $biblioteca->agregarLibros($libro1);
    $biblioteca->agregarLibros($libro2);
    
    // Mostrar libros disponibles
    echo("Libros Disponibles<br>");
    $biblioteca->mostrarLibros();
    
    // Crear usuarios
    echo("Creando usuarios<br>");
    $usuario1 = new Usuario("Sebastian Rivera", "1");
    $usuario2 = new Usuario("Nicolas Canchon", "2");
    $biblioteca->registrarUsuario($usuario1);
    $biblioteca->registrarUsuario($usuario2);
    
    // Prestar y devolver libros
    echo("Prestando Libro<br>");
    $biblioteca->prestarLibro("1", "1234567890");
    $usuario1->getLibros();
    
    echo("Devolviendo Libro<br>");
    $biblioteca->devolverLibro("1", "1234567890");
    $usuario1->getLibros();
?>