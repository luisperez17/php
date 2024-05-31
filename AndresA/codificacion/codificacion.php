
<?php
 
    //Codificacion por AES
    $mensaje = "Este es un mensaje confidencial por aes";
    
    // Generar una clave para AES (debe ser de 128, 192 o 256 bits)
    $clave = openssl_random_pseudo_bytes(32);
    
    // Cifrar el mensaje usando AES
    $iv = openssl_random_pseudo_bytes(16);
    $cifrado = openssl_encrypt($mensaje, 'aes-256-cbc', $clave, OPENSSL_RAW_DATA, $iv);
    
    // Agregar el IV al mensaje cifrado
    $mensaje_cifrado = $iv . $cifrado;
    
    $mensaje_cifrado_base64 = base64_encode($mensaje_cifrado);
    $clave_base64 = base64_encode($clave);
    
    echo "Mensaje cifrado: " . "<br>". base64_encode($mensaje_cifrado_base64) . "<br>";
    echo "Clave: ". "<br>" . base64_encode($clave_base64) . "<br>";
    
    $mensaje_cifrado_decodificado = base64_decode($mensaje_cifrado_base64);
    $clave_decodificada = base64_decode($clave_base64);
    
    $iv_decodificado = substr($mensaje_cifrado_decodificado, 0, 16);
    $mensaje_cifrado_sin_iv = substr($mensaje_cifrado_decodificado, 16);
    
    $mensaje_decifrado = openssl_decrypt($mensaje_cifrado_sin_iv, 'aes-256-cbc', $clave_decodificada, OPENSSL_RAW_DATA, $iv_decodificado);
    
    echo "Mensaje decifrado Por AES: ". "<br>" . $mensaje_decifrado . "<br>";
    
    
    //Codificacion por RSA
    $mensaje = "Este es un mensaje super confidencial RSA";
    $config = array(
        "digest_alg" => "sha512",
        "private_key_bits" => 4096,
        "private_key_type" => OPENSSL_KEYTYPE_RSA,
    );
    $par_calves = openssl_pkey_new($config);
    
    //obtener clave pública y privada
    openssl_pkey_export($par_calves, $clave_privada);
    $detalles_clave_publica = openssl_pkey_get_details($par_calves);
    $clave_publica = $detalles_clave_publica["key"];
    
    //cifrar el mensaje usando la clave publica
    openssl_public_encrypt($mensaje, $mensaje_cifrado, $clave_publica);
    
    //Mostrar mensaje cifrado y clave privada
    echo "Mensaje cifrado: " . "<br>". base64_encode($mensaje_cifrado) . "<br>";
    echo "Clave privada: ". "<br>" . base64_encode($clave_privada) . "<br>";
    
    //Mensaje privado y clave privada que recibimos (base 64)
    $mensaje_cifrado_base64 = base64_encode($mensaje_cifrado);
    $clave_privada_base64 = base64_encode($clave_privada);
    
    $mensaje_cifrado = base64_decode($mensaje_cifrado_base64);
    $clave_privada = base64_decode($clave_privada_base64);
    
    //Decifrar el mensaje usando la clave privada
    openssl_private_decrypt($mensaje_cifrado, $mensaje_decifrado, $clave_privada);
    
    //Mostrar el mensaje decifrado
    echo "Mensaje decifrado Por RSA: " . $mensaje_decifrado . "<br>";
    
    
?>
