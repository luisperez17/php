<?php

interface UsuarioInterface
{
    public function registrarUsuario($nombre, $email, $password);
    public function autenticarUsuario($email, $password);
    public function obtenerUsuarioPorId($id);
    public function obtenerUsuarioPorEmail($email);
    public function actualizarUsuario($id, $nombre, $email, $password);
    public function eliminarUsuario($id);
}

class Usuario implements UsuarioInterface
{
    private $db;

    public function __construct($dbConnection)
    {
        $this->db = $dbConnection->getConnection();
    }

    public function registrarUsuario($nombre, $email, $password)
    {
        try {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $this->db->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (:nombre, :email, :password)");
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->execute();
            return $this->db->lastInsertId();
        } catch (PDOException $e) {
            echo "Error al registrar usuario: " . $e->getMessage();
            return false;
        }
    }

    public function autenticarUsuario($email, $password)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $usuario = $stmt->fetch();

            if ($usuario && password_verify($password, $usuario['password'])) {
                return $usuario;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error al autenticar usuario: " . $e->getMessage();
            return false;
        }
    }

    public function obtenerUsuarioPorId($id)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo "Error al obtener usuario por ID: " . $e->getMessage();
            return false;
        }
    }

    public function obtenerUsuarioPorEmail($email)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM usuarios WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $e) {
            echo "Error al obtener usuario por email: " . $e->getMessage();
            return false;
        }
    }

    public function actualizarUsuario($id, $nombre, $email, $password)
    {
        try {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $this->db->prepare("UPDATE usuarios SET nombre = :nombre, email = :email, password = :password WHERE id = :id");
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error al actualizar usuario: " . $e->getMessage();
            return false;
        }
    }

    public function eliminarUsuario($id)
    {
        try {
            $stmt = $this->db->prepare("DELETE FROM usuarios WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Error al eliminar usuario: " . $e->getMessage();
            return false;
        }
    }
}