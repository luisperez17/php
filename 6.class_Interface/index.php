
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Usuario:</h3>
    <hr>
    <form action="getFields.php" method="POST">
        <input type="email" id="email1" name="email1" placeholder="email">
        <input type="password" id="password1" name="password1" placeholder="password">

        <button type="submit" value="Crear"  id="Crear" name="action">CREAR</button>
        <button type="submit" value="Actualizar"  id="Actualizar" name="action">ACTUALIZAR</button>
        <button type="submit" value="Leer"  id="Leer" name="action">LEER</button>
    </form>
</body>
</html>
