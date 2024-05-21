<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Consultas</h1>
    <hr>
    <h2>Insertar venta</h2>
    <form action="getFields.php" method="POST">
        <input type="text"   name='cantidad' id='cantidad' placeholder='cantidad productos'><br>
        <input type="date"   name='fecha' id='fecha' placeholder='fecha venta'><br>
        <?php  
            include "nueva_venta.php";
        ?>           
            <select name="cliente" id="cliente" required>
                <option value=""></option>
                <?php  
                    $clientes = clientes();
                    foreach($clientes as $c){print("<option name=cliente id=cliente >".$i." ".$c['nombre_usuario']."</option>");}
                ?>             
            </select>
            
            <select name="producto" id="producto" required>
                <option value=""></option>
                <?php  
                    $productos = productos();
                    foreach($productos as $p){print("<option name=producto id=producto >".$i." ".$p['nombre_producto']."</option>");}
                ?>             
            </select> 

            <select name="vendedor" id="vendedor" required>
                <option value=""></option>
                <?php  
                    $vendedores = vendedores();
                    foreach($vendedores as $v){print("<option name=vendedor id=vendedor >".$i." ".$v['nombre_vendedor']."</option>");}
                ?>             
            </select>
  
        <input type="submit"  value="Crear venta">
    </form>

    <hr>
    <h2>Leer ventas</h2>
    <table border="1">
        <tr>
            <th>id</th>
            <th>cliente</th>
            <th>producto</th>
            <th>vendedor</th>
            <th>fecha</th>
            <th>cantidad</th>
        </tr>
        <?php
            $ventas = ventas();
            foreach($ventas as $c){
                print(
                    "<tr>".
                        "<td>".$c['id']."</td>".
                        "<td>".$c['nombre_usuario']."</td>".
                        "<td>".$c['nombre_producto']."</td>".
                        "<td>".$c['nombre_vendedor']."</td>".
                        "<td>".$c['fecha_venta']."</td>".
                        "<td>".$c['cantidad_productos']."</td>".
                    "</tr>"
                );
            }
        ?>
    </table>


    <hr>
    <h2>Actualizar ventas</h2>
    <form action="updateVenta.php" method="POST">
        <input type="text"   name='id' id='id' placeholder='id venta' placeholder="id venta a actualizar"><br>
        <input type="text"   name='cantidad' id='cantidad' placeholder='cantidad productos'><br>
        <input type="date"   name='fecha' id='fecha' placeholder='fecha venta'><br>
        
            <select name="cliente" id="cliente" required>
                <option value=""></option>
                <?php  
                    $clientes = clientes();
                    foreach($clientes as $c){print("<option name=cliente id=cliente >".$i." ".$c['nombre_usuario']."</option>");}
                ?>             
            </select>
            
            <select name="producto" id="producto" required>
                <option value=""></option>
                <?php  
                    $productos = productos();
                    foreach($productos as $p){print("<option name=producto id=producto >".$i." ".$p['nombre_producto']."</option>");}
                ?>             
            </select> 

            <select name="vendedor" id="vendedor" required>
                <option value=""></option>
                <?php  
                    $vendedores = vendedores();
                    foreach($vendedores as $v){print("<option name=vendedor id=vendedor >".$i." ".$v['nombre_vendedor']."</option>");}
                ?>             
            </select>
  
        <input type="submit"  value="Actualizar venta">
    </form>






    
    <hr>
    <h2>Borrar venta</h2>

    <form action="deleteVenta.php" method="POST">
        <input type="number" name="venta_" id="venta_" placeholder="pon el id de la venta a eliminar">
        <input type="submit" value="Borrar venta">
    </form>
            
</body>
</html>