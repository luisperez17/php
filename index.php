<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario</title>
    <link>
</head>
<body>

<h2>Formulario</h2>

<form action="procesar.php" metod="POST">
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
    </div>
    <div>
        <label for="genero">Género:</label>
        <select id="genero" name="genero" required>
            <option value="">Seleccione</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
        </select>
    </div>
    <div>
        <p>Preferencias:</p>
        <input type="checkbox" id="deportes" name="preferencias[]" value="deportes">
        <label for="deportes">Deportes</label><br>
        <input type="checkbox" id="musica" name="preferencias[]" value="musica">
        <label for="musica">Música</label><br>
        <input type="checkbox" id="lectura" name="preferencias[]" value="lectura">
        <label for="lectura">Lectura</label><br>
    </div>
    <div>
        <p>Estado Civil:</p>
        <input type="checkbox" id="soltero" name="estado_civil[]" value="soltero">
        <label for="soltero">Soltero/a</label><br>
        <input type="checkbox" id="casado" name="estado_civil[]" value="casado">
        <label for="casado">Casado/a</label><br>
        <input type="checkbox" id="divorciado" name="estado_civil[]" value="divorciado">
        <label for="divorciado">Divorciado/a</label><br>
    </div>
    <div>
        <button type="submit">Enviar</button>
    </div>
</form>

</body>
</html>
