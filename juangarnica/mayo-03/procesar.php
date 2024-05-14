<?php
    $host = 'db';
    $dbname = 'db';
    $username = 'db';
    $password = 'db';
 
    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexion con la base de datos exitosa" . "<br>";
        print "<hr>";
    } catch (PDOException $e) {
        echo "Error de conexion: " . $e->getMessage(); 
    }

    //Consultar registros
    $tablas = $_POST["tabla"];
    $accion = $_POST["accion"];
    $idregistro = $_POST["id"];

    if($tablas == 'cliente' && $accion == 'consultar'){
        if($idregistro != ''){
            try {
                $var = $db->prepare("SELECT * FROM $tablas WHERE id = $idregistro");
                $var->execute();
                $tablas = $var->fetchALL(PDO::FETCH_ASSOC);
                    foreach ($tablas as $tabla) {
                        print "ID Cliente: " . $tabla['id'] . "<br>";
                        print "Nombre: " . $tabla['nombre_usuario'] . "<br>";
                        print "Correo: " . $tabla['email_usuario'] . "<br>";
                        print "Teléfono: " . $tabla['telefono_usuario'] . "<br>";
                        print "<hr>";
                }       
            } catch (PDOException $e) {
                echo "Error al leer los registros: " . $e->getMessage();
            }
        }else{
            try {
                $var = $db->prepare("SELECT * FROM $tablas");
                $var->execute();
                $tablas = $var->fetchALL(PDO::FETCH_ASSOC);
                    foreach ($tablas as $tabla) {
                        print "ID Cliente: " . $tabla['id'] . "<br>";
                        print "Nombre: " . $tabla['nombre_usuario'] . "<br>";
                        print "Correo: " . $tabla['email_usuario'] . "<br>";
                        print "Teléfono: " . $tabla['telefono_usuario'] . "<br>";
                        print "<hr>";
                }       
            } catch (PDOException $e) {
                echo "Error al leer los registros: " . $e->getMessage();
            }
        }
    }

    if($tablas == 'producto' && $accion == 'consultar'){
        if($idregistro != ''){
            try {
                $var = $db->prepare("SELECT * FROM $tablas WHERE id = $idregistro");
                $var->execute();
                $tablas = $var->fetchALL(PDO::FETCH_ASSOC);
                    foreach ($tablas as $tabla) {
                        print "ID Producto: " . $tabla['id'] . "<br>";
                        print "Producto: " . $tabla['nombre_producto'] . "<br>";
                        print "Precio: " . $tabla['precio'] . "<br>";
                        print "<hr>";
                }       
            } catch (PDOException $e) {
                echo "Error al leer los registros: " . $e->getMessage();
            }
        }else{
            try {
                $var = $db->prepare("SELECT * FROM $tablas");
                $var->execute();
                $tablas = $var->fetchALL(PDO::FETCH_ASSOC);
                    foreach ($tablas as $tabla) {
                        print "ID Producto: " . $tabla['id'] . "<br>";
                        print "Producto: " . $tabla['nombre_producto'] . "<br>";
                        print "Precio: " . $tabla['precio'] . "<br>";
                        print "<hr>";
                }       
            } catch (PDOException $e) {
                echo "Error al leer los registros: " . $e->getMessage();
            }
        }
    }

    if($tablas == 'vendedor' && $accion == 'consultar'){
        if($idregistro != ''){
            try {
                $var = $db->prepare("SELECT * FROM $tablas WHERE id = $idregistro");
                $var->execute();
                $tablas = $var->fetchALL(PDO::FETCH_ASSOC);
                    foreach ($tablas as $tabla) {
                        print "ID Vendedor: " . $tabla['id'] . "<br>";
                        print "Vendedor: " . $tabla['nombre_vendedor'] . "<br>";
                        print "Email: " . $tabla['email_vendedor'] . "<br>";
                        print "<hr>";
                }       
            } catch (PDOException $e) {
                echo "Error al leer los registros: " . $e->getMessage();
            }
        }else{
            try {
                $var = $db->prepare("SELECT * FROM $tablas");
                $var->execute();
                $tablas = $var->fetchALL(PDO::FETCH_ASSOC);
                    foreach ($tablas as $tabla) {
                        print "ID Vendedor: " . $tabla['id'] . "<br>";
                        print "Vendedor: " . $tabla['nombre_vendedor'] . "<br>";
                        print "Email: " . $tabla['email_vendedor'] . "<br>";
                        print "<hr>";
                }       
            } catch (PDOException $e) {
                echo "Error al leer los registros: " . $e->getMessage();
            }
        }
    }

    if($tablas == 'venta' && $accion == 'consultar'){
        if($idregistro != ''){
            try {
                $var = $db->prepare("SELECT * FROM $tablas WHERE id = $idregistro");
                $var->execute();
                $tablas = $var->fetchALL(PDO::FETCH_ASSOC);
                    foreach ($tablas as $tabla) {
                        print "ID Venta: " . $tabla['id'] . "<br>";
                        print "ID Cliente: " . $tabla['id_cliente'] . "<br>";
                        print "ID Producto: " . $tabla['id_producto'] . "<br>";
                        print "ID Vendedor: " . $tabla['id_vendedor'] . "<br>";
                        print "Fecha de venta: " . $tabla['fecha_venta'] . "<br>";
                        print "Cantidad de productos: " . $tabla['cantidad_productos'] . "<br>";
                        print "<hr>";
                }       
            } catch (PDOException $e) {
                echo "Error al leer los registros: " . $e->getMessage();
            }
        }else{
            try {
                $var = $db->prepare("SELECT * FROM $tablas");
                $var->execute();
                $tablas = $var->fetchALL(PDO::FETCH_ASSOC);
                    foreach ($tablas as $tabla) {
                        print "ID Venta: " . $tabla['id'] . "<br>";
                        print "ID Cliente: " . $tabla['id_cliente'] . "<br>";
                        print "ID Producto: " . $tabla['id_producto'] . "<br>";
                        print "ID Vendedor: " . $tabla['id_vendedor'] . "<br>";
                        print "Fecha de venta: " . $tabla['fecha_venta'] . "<br>";
                        print "Cantidad de productos: " . $tabla['cantidad_productos'] . "<br>";
                        print "<hr>";
                }       
            } catch (PDOException $e) {
                echo "Error al leer los registros: " . $e->getMessage();
            }
        }
    }
 ?>