<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2 class="titulo">Formulario PHP</h2>
    <form action="procesar.php" method="POST" class="formulario">
        <div class="campo">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>

        <div class="campo">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="campo">
            <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad" required>
        </div>

        <div class="campo">
            <label for="genero">Género:</label>
            <select name="genero" id="genero" required>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
                <option value="otro">Otro</option>
            </select>
        </div>

        <div class="campo">
            <label>Preferencias:</label><br>
            <input type="checkbox" name="preferencias[]" value="deportes"> Deportes<br>
            <input type="checkbox" name="preferencias[]" value="musica"> Música<br>
            <input type="checkbox" name="preferencias[]" value="lectura"> Lectura<br>
        </div>

        <div class="campo">
            <label>Estado civil:</label><br>
            <input type="radio" name="estado_civil" value="soltero"> Soltero<br>
            <input type="radio" name="estado_civil" value="casado"> Casado<br>
            <input type="radio" name="estado_civil" value="otro"> Otro<br>
        </div>

        <div class="campo">
            <input type="submit" value="Enviar" class="boton">
        </div>
    </form>
</body>
</html>