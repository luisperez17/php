<?php
    $host = 'db';
    $dbname = 'db';
    $username = 'db';
    $password = 'db';
    try{
        $db = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXEPTION);
        echo "conexion exitosa";
    }catch(PDOException $e){
        echo "error de conexion" . $e->getMessage();
    }
?>