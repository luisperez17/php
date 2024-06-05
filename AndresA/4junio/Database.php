<?php
interface ConexionDB {
    public function conexion();
    public function desconexion();
    public function query();
}

class DatabaseConnection {
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $pdo;

    // Constructor
    public function __construct($host, $dbname, $username, $password) {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;

        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
            echo "Conexión exitosa a la base de datos.\n";
        } catch (PDOException $e) {
            echo "Error al conectar a la base de datos: " . $e->getMessage() . "\n";
        }
    }

    // Método para obtener la conexión PDO
    public function getConnection() {
        return $this->pdo;
    }

    // Destructor
    public function __destruct() {
        $this->pdo = null;
        echo "Conexión cerrada.\n";
    }
}
