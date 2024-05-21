<?php
    function insert_record($cantidad, $fecha, $cliente, $producto, $vendedor){
        
        $host = 'db';
        $dbname = 'db';
        $username = 'db';
        $password = 'db';
        $conn = new mysqli($host, $dbname, $username, $password); 
        
        // validar existencia y hacer match con el id de la tabla
        $query = "select * from cliente";
        $clientes = $conn->query($query);
        $idcliente = null;
        foreach($clientes as $c){if($c['nombre_usuario'] === (String)$cliente){$idcliente=$c['id'];}}
        
        $query = "select * from producto";
        $productos = $conn->query($query);
        $idproducto = null;
        foreach($productos as $p){if($p['nombre_producto'] === (String)$producto){$idproducto=$p['id'];}}

        $query = "select * from vendedor";
        $vendedores = $conn->query($query);
        $idvendedor = null;
        foreach($vendedores as $v){if($v['nombre_vendedor'] === (String)$vendedor){$idvendedor=$v['id'];}}


        // insertar query
        $SQL_INSERT = "insert into venta(cantidad_productos, fecha_venta, id_cliente, id_Producto, id_vendedor) values ('$cantidad', '$fecha', '$idcliente', '$idproducto', '$idvendedor')";
        $execute = $conn->query($SQL_INSERT);

        if($execute){print('se han guardado los datos');}else{print('No se han gurdado los datos');}

        $conn->close();
    }   

    function clientes(){
        
        $host = 'db';
        $dbname = 'db';
        $username = 'db';
        $password = 'db';
        $conn = new mysqli($host, $dbname, $username, $password); 

        $query = "select * from cliente";

        $clientes = $conn->query($query);
        $conn->close();
        return $clientes;
    }   

    function productos(){
        
        $host = 'db';
        $dbname = 'db';
        $username = 'db';
        $password = 'db';
        $conn = new mysqli($host, $dbname, $username, $password); 

        $query = "select * from producto";
        
        $productos = $conn->query($query);
        $conn->close();
        return $productos;
    }   
    function vendedores(){
        
        $host = 'db';
        $dbname = 'db';
        $username = 'db';
        $password = 'db';
        $conn = new mysqli($host, $dbname, $username, $password); 

        $query = "select * from vendedor";
        
        $vendedores = $conn->query($query);
        $conn->close();
        return $vendedores;
    }   

    function ventas(){
        
        $host = 'db';
        $dbname = 'db';
        $username = 'db';
        $password = 'db';
        $conn = new mysqli($host, $dbname, $username, $password); 

        $query = "select a.id, b.nombre_usuario, c.nombre_producto, d.nombre_vendedor, a.fecha_venta, a.cantidad_productos 
                    from venta a  inner join cliente b ON  a.id_cliente=b.id
                                  inner join producto c ON a.id_producto=c.id
                                  inner join vendedor d ON a.id_vendedor=d.id";
        
        $ventas = $conn->query($query);
        $conn->close();
        return $ventas;
    }   

    function delete_venta($id_venta){
        
        $host = 'db';
        $dbname = 'db';
        $username = 'db';
        $password = 'db';
        $conn = new mysqli($host, $dbname, $username, $password); 

        $query = "delete from venta where id =".$id_venta;
        
        $ventas = $conn->query($query);
        $conn->close();
    }   

    function update_venta($id, $cantidad, $fecha, $cliente, $producto, $vendedor){
        
        $host = 'db';
        $dbname = 'db';
        $username = 'db';
        $password = 'db';
        $conn = new mysqli($host, $dbname, $username, $password); 

        // validar existencia y hacer match con el id de la tabla
        $query = "select * from cliente";
        $clientes = $conn->query($query);
        $idcliente = null;
        foreach($clientes as $c){if($c['nombre_usuario'] === (String)$cliente){$idcliente=$c['id'];}}
        
        $query = "select * from producto";
        $productos = $conn->query($query);
        $idproducto = null;
        foreach($productos as $p){if($p['nombre_producto'] === (String)$producto){$idproducto=$p['id'];}}

        $query = "select * from vendedor";
        $vendedores = $conn->query($query);
        $idvendedor = null;
        foreach($vendedores as $v){if($v['nombre_vendedor'] === (String)$vendedor){$idvendedor=$v['id'];}}



        $query = "UPDATE venta SET id_cliente=".$idcliente.", id_producto=".$idproducto.", id_vendedor=".$idvendedor." WHERE id=".$id;
        
        $ventas = $conn->query($query);
        $conn->close();
    }  
?>