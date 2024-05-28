<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<h2>Biblioteca</h2>
<form action="Controlador/getIndexParams/forBiblioteca.php" method="POST">
    <input type="number" placeholder="id" name="id" id="id"><br>
    <input type="text" placeholder="biblioteca" name="biblioteca" id="biblioteca"><br>
    <input type="text" placeholder="pais" name="pais" id="pais"><br>
    <input type="text" placeholder="direccion" name="direccion" id="direccion"><br>

    
    <button type="submit" value="Crear"  id="Crear"  style="background-color:#E1eCCC;"   name="action">CREAR</button>
    <button type="submit" value="Leer"   id = "Leer" style="background-color:#FFF8DC;"   name="action">LEER</button>
    <button type="submit" value="Actualizar"  id="Actualizar" style="background-color:#BFEFFF;" name="action">ACTUALIZAR</button>
    <button type="submit" value="Borrar"   id="Borrar"  style="background-color:#FFDDF4;" name="action">BORRAR</button>
</form>

<hr>
<h2>Usuarios</h2>
<form action="Controlador/getIndexParams/forUsuario.php" method="POST">
    <input type="number" placeholder="cedula" name="cedula" id="cedula"><br>
    <input type="text" placeholder="nombre" name="nombre" id="nombre"><br>
    <input type="date" placeholder="fechaNa" name="fechaNa" id="fechaNa"><br>
    <input type="email" placeholder="email" name="email" id="email"><br>
    <input type="number" placeholder="telefono" name="telefono" id="telefono"><br>
    <input type="text" placeholder="direccion" name="direccion" id="direccion"><br>
    
    <button type="submit" value="Crear"  id="Crear"  style="background-color:#E1ECCC;"   name="action">CREAR</button>
    <button type="submit" value="Leer"   id = "Leer" style="background-color:#FFF8DC;"   name="action">LEER</button>
    <button type="submit" value="Actualizar"  id="Actualizar" style="background-color:#BFEFFF;" name="action">ACTUALIZAR</button>
    <button type="submit" value="Borrar"   id="Borrar"  style="background-color:#FFDDF4;" name="action">BORRAR</button>
</form>



<hr>
<h2>Libros</h2>
<form action="Controlador/getIndexParams/forLibros.php" method="POST">
    <input type="number" placeholder="id" name="id" id="id"><br>
    <input type="text" placeholder="nombre" name="nombre" id="nombre"><br>
    <input type="text" placeholder="autor" name="autor" id="autor"><br>
    <input type="text" placeholder="editorial" name="editorial" id="editorial"><br>
    <input type="text" placeholder="categoria" name="categoria" id="categoria"><br>
    <input type="number" placeholder="paginas" name="paginas" id="paginas"><br>
    <input type="date" placeholder="fecha_publicacion" name="fecha_publicacion" id="fecha_publicacion"><br>

    
    <button type="submit" value="Crear"  id="Crear"  style="background-color:#E1ECCC;"   name="action">CREAR</button>
    <button type="submit" value="Leer"   id = "Leer" style="background-color:#FFF8DC;"   name="action">LEER</button>
    <button type="submit" value="Actualizar"  id="Actualizar" style="background-color:#BFEFFF;" name="action">ACTUALIZAR</button>
    <button type="submit" value="Borrar"   id="Borrar"  style="background-color:#FFDDF4;" name="action">BORRAR</button>
</form>


</body>
</html>