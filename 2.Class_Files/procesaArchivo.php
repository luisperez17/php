<?php

    $host = 'db';
    $dbname = 'db';
    $username = 'db';
    $password = 'db';
    $datos = null;
    $conn = new mysqli($host, $dbname, $username, $password); 

    if($_FILES["archivo"]["error"] === UPLOAD_ERR_OK){
        $ruta_temporal =$_FILES["archivo"]["tmp_name"];
        $datos = array_map("str_getcsv", file($ruta_temporal));
        // print_r($datos);
    }else{
        print("error al cargar archivo");
    }

    foreach($datos as $i){
        $nombre = base64_decode($i[0]);
        $email = base64_decode($i[1]);
        $edad = $i[2];
        $genero = $i[3];
        $preferencias = $i[4];
        $estado_civil = $i[5];

        $sql = "insert into tu_table(nombre, email, edad, genero, preferencias, estado_civil) values ('$nombre', '$email', '$edad', '$genero', '$preferencias', '$estado_civil')";
        
        $guardado = $conn->query($sql);

        if($guardado){print('se han guardado los datos');}else{print('No se han gurdado los datos');}

        $conn->close();
    }

?>