<?php

   /**$numeros = [3, 4. 5. 11, 10, 45, 57, 95, 3];
    $numero_incrementado = $array_map(function($n){
        return $n + 1;
    }, $numeros);
    echo "<pre>";
    print_r($numero_incrementado);
    */


/**Calcula el área de un elemento dado su ancho y alto.
 * 
 * @param int $ancho el ancho del elemento.
 * @param int $alto el alto del elemento.
 * @return int El área del elemento.
 * @throws Exception Si el ancho o el alto no son números válidos.
 * 
 * @example
 * //ejemplo de uso de la funcion
 * $area = calcular_area(2, 4);
 * echo 'El area del elemento es: '. $area;
 */
    function calcular_area($ancho, $alto){
        if(!is_numeric($ancho) || !is_numeric($alto)){
            throw new Exception("El ancho y la altura deben ser número válidos", 1);
        
        }
        return $ancho * $alto;
    }
    $area = calcular_area(5, 4);
    echo 'El area del elemento es: ' . $area;
?>