<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        --------------FORMULARIO---------------
        <br><form action="procesar.php" method="POST">
            <label for="email">Nombre:</label><br>
            <input type=text name="nombre" id="nombre" required><br>
            <label for="email">Email:</label><br>
            <input type="email" name="email" id="email" required><br>
            <label for="edad">Edad: </label><br>
            <input type="number" name="edad" id="edad" required><br>
            <label for="genero">Genero:</label>
            <select name="genero" id="genero" required>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
            </select><br>
            <label>Preferencias:</label><br>
            <input type="checkbox" name="preferencias" value="deportes"> Deportes<br> <input type="checkbox" name="preferencias" value="musica"> Música<br>
            <input type="checkbox" name="preferencias" value="lectura"> Lectura<br>
            <label>Estado civil:</label><br>
            <input type="radio" name="estado_civil" value="soltero"> Soltero<br>
            <input type="radio" name="estado_civil" value="casado"> casado<br>
            <input type="radio" name="estado_civil" value="otro"> otro<br>
            <input type="submit" value="Enviar">
        </form>



</body>
</html>