<?php
require_once 'Database.php';
require_once 'Usuario.php';

// Configuración de la base de datos
$host = 'db';
$dbname = 'my_database';
$username = 'user';
$password = 'password';

// Crear la conexión a la base de datos
$dbConnection = new DatabaseConnection($host, $dbname, $username, $password);
$usuario = new Usuario($dbConnection);

// Manejo de formularios
$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    switch ($_POST['action']) {
        case 'register':
            $result = $usuario->registrarUsuario($_POST['nombre'], $_POST['email'], $_POST['password']);
            $message = $result ? 'Usuario registrado exitosamente.' : 'Error al registrar usuario.';
            break;
        case 'login':
            $result = $usuario->autenticarUsuario($_POST['email'], $_POST['password']);
            $message = $result ? 'Usuario autenticado exitosamente.' : 'Error en la autenticación.';
            break;
        case 'get_by_id':
            $result = $usuario->obtenerUsuarioPorId($_POST['id']);
            $message = $result ? 'Usuario: ' . print_r($result, true) : 'Usuario no encontrado.';
            break;
        case 'get_by_email':
            $result = $usuario->obtenerUsuarioPorEmail($_POST['email']);
            $message = $result ? 'Usuario: ' . print_r($result, true) : 'Usuario no encontrado.';
            break;
        case 'update':
            $result = $usuario->actualizarUsuario($_POST['id'], $_POST['nombre'], $_POST['email'], $_POST['password']);
            $message = $result ? 'Usuario actualizado exitosamente.' : 'Error al actualizar usuario.';
            break;
        case 'delete':
            $result = $usuario->eliminarUsuario($_POST['id']);
            $message = $result ? 'Usuario eliminado exitosamente.' : 'Error al eliminar usuario.';
            break;
    }
}

// Obtener todos los usuarios para mostrar en la tabla
$usuarios = [];
try {
    $result = $dbConnection->getConnection()->query('SELECT * FROM usuarios');
    while ($row = $result->fetch()) {
        $usuarios[] = $row;
    }
} catch (PDOException $e) {
    $message = "Error al obtener usuarios: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Usuarios</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Gestión de Usuarios</h1>
    <p><?php echo $message; ?></p>
    
    <h2>Registrar Usuario</h2>
    <form method="post">
        <input type="hidden" name="action" value="register">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Registrar</button>
    </form>

    <h2>Autenticar Usuario</h2>
    <form method="post">
        <input type="hidden" name="action" value="login">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Autenticar</button>
    </form>

    <h2>Obtener Usuario por ID</h2>
    <form method="post">
        <input type="hidden" name="action" value="get_by_id">
        <label for="id">ID:</label>
        <input type="number" id="id" name="id" required>
        <button type="submit">Obtener Usuario</button>
    </form>

    <h2>Obtener Usuario por Email</h2>
    <form method="post">
        <input type="hidden" name="action" value="get_by_email">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Obtener Usuario</button>
    </form>

    <h2>Actualizar Usuario</h2>
    <form method="post">
        <input type="hidden" name="action" value="update">
        <label for="id">ID:</label>
        <input type="number" id="id" name="id" required>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Actualizar</button>
    </form>

    <h2>Eliminar Usuario</h2>
    <form method="post">
        <input type="hidden" name="action" value="delete">
        <label for="id">ID:</label>
        <input type="number" id="id" name="id" required>
        <button type="submit">Eliminar</button>
    </form>

    <h2>Lista de Usuarios</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Creado en</th>
                <th>Actualizado en</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?php echo htmlspecialchars($usuario['id']); ?></td>
                <td><?php echo htmlspecialchars($usuario['nombre']); ?></td>
                <td><?php echo htmlspecialchars($usuario['email']); ?></td>
                <td><?php echo htmlspecialchars($usuario['created_at']); ?></td>
                <td><?php echo htmlspecialchars($usuario['updated_at']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>