<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Formulario en PHP</h2>
    <form action="procesar.php" method="POST">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>
        <br>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <br>
        <div>
            <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad" required>
        </div>
        <br>
        <div>
            <label for="genero">Género:</label>
            <select name="genero" id="genero">
                <option value="hombre">Hombre</option>
                <option value="mujer">Mujer</option>
                <option value="otro">Otro</option>
            </select>
        </div>
        <br>
        <div>
            <label for="preferencias">Preferencias:</label>
            <input type="checkbox" name="preferencias" value="deportes">Deportes
            <input type="checkbox" name="preferencias" value="musica">Música
            <input type="checkbox" name="preferencias" value="lectura">Lectura
        </div>
        <br>
        <div>
            <label for="estado_civil">Estado civil:</label>
            <input type="radio" name="estado_civil" value="soltero">Soltero
            <input type="radio" name="estado_civil" value="casado">Casado
            <input type="radio" name="estado_civil" value="otro">Otro
        </div>
        <br>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>