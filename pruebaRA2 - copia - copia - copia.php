<?php
    //03 DE OCTUBRE
    $nombre = "Celia Navarro";//Este es mi nombre
    echo "Hola, mi nombre es $nombre"; //impresión de mi nombre
    echo "<br></br>";
    define ("PI", 3.1416); 
    echo PI; //imprime el número PI
    echo "<br></br>";
    $Nombre1 = "CARLOS";
    $nombre1 = "carlos";
    echo "variable1 $Nombre1 , variable2 $nombre1";//prueba php es sensible a las mayúsculas y minúsculas
echo "<br>";
class Persona{
    public $nombre4;
    public $edad;
    public $direccion;
}
 echo "<br>";

$celia = new Persona();
$celia-> nombre4 = "Celia";
$celia-> edad = 30;
$celia-> direccion = "Calle Isabela";
echo "El nombre es: $celia->nombre4" ;
echo "<br>";
//definición de diferentes tipos de variables
$entero = 100;
$flotante = 11.2;
$booleano = true;
$cadena = "Cadenaaaa!!!";
echo "El valor de un entero es: $entero "; var_dump($entero);
echo "<p></p>";
echo "El valor de un flotante es: $flotante "; var_dump($flotante);
echo "<p></p>";
define ("DESPEDIDA", "¡Adiosito!");
echo "Esta clase ha terminado. <p></p>" . DESPEDIDA;
//04 DE OCTUBRE
//declarar una variable con valor nulo
echo "<br></br>";
//operadores
$resultadoOperadores= 5+3*2;//precedencia
echo "El resultado es: $resultadoOperadores";//imprime 11
echo "<br></br>";
//operaciones con paréntesis
$resultadoParentesis= (5+3)*2;
echo "El resultado es: $resultadoParentesis";
echo "<br></br>";
//operador de concatenación (.) 
$saludo="tardes";
echo "Esto es una concatenación con punto. Buenas ".$saludo."!!!";
echo "<br></br>";
//comparación (true o false) 
$a = 3;
$b = 6;
if ($a === $b){
    echo "son iguales";
} else {
    echo "No son iguales";
}
echo "<br></br>";
if ($a == $b){
    echo "son iguales";
} else {
    echo "No son iguales";
}
echo "<br></br>";

if ($a != $b){
    echo "son iguales";
} else {
    echo "No son iguales";
}
echo "<br></br>";
if ($a < $b){
    echo "son iguales";
} else {
    echo "No son iguales";
}
echo "<br></br>";
if ($a >= $b){
    echo "son iguales";
} else {
    echo "No son iguales";
}
echo "<br></br>";

//arrays




?>