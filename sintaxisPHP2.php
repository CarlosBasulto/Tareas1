<?php
/*2. Ejercicio de Comentarios y Buenas Prácticas 
Escribe un script en PHP que contenga una función de llamada 
calcularAreaRectangulo($ancho, $alto). Documente cada parte del guión con comentarios detallados, 
incluyendo la explicación de la función, los parámetros y cómo se realiza la operación. Usa comentarios
 multilínea para explicar el propósito general del script y comentarios de una sola línea para detallar las operaciones.
 */

    //Funcion para calcular el area del rectangulo
    function calcularAreaRectangulo($ancho, $alto){
       
        if ($ancho > 0 && $alto > 0 ){  
            $area= $ancho * $alto;
            return $area;
        } else {
            echo "el ancho y el alto deben ser mayores que 0.";
        }
            
    }

$anchoUsuario= 6;
$altoUsuario= 3;
$resultado = calcularAreaRectangulo($anchoUsuario, $altoUsuario);
echo "El área del rectángulo es: " . $resultado;//Muestra el área del rectángulo
?>