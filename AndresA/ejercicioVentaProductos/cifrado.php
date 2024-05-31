<?php

    // Se declara la clave de cifrado
    $clave = "claveSuperSegura";

    function cifrarAES($data) {
        global $clave;
        // Se recorre el array con los valores que se van a cifrar
        foreach ($data as $key => $value) {
            // Cifrar el mensaje con AES-256-CBC
            // El IV es generado aleatoriamente con openssl_random_pseudo_bytes()
            // El mensaje cifrado contiene el IV

            $iv = openssl_random_pseudo_bytes(16); // Generar un IV aleatorio
            $cifrado = openssl_encrypt($value, 'aes-256-cbc', $clave, OPENSSL_RAW_DATA, $iv);

            // Agregar el IV al mensaje cifrado
            $data[$key] = base64_encode($iv . $cifrado);
        }
        return $data;
    }

    function descifrarAES($data) {
        global $clave;
        // Se recorre el array con los valores que se van a descifrar
        foreach ($data as $key => $value) {
            // Se decodifica la cadena base64
            $value = base64_decode($value);
            // Se separa el IV del mensaje cifrado
            $iv = substr($value, 0, 16);
            $cifrado = substr($value, 16);

            // Descifrar el mensaje con AES-256-CBC
            $descifrado = openssl_decrypt($cifrado, 'aes-256-cbc', $clave, OPENSSL_RAW_DATA, $iv);

            $data[$key] = $descifrado;
        }
        return ($data);
    }
?>
