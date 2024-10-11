<?php
/*1. Ejercicio con echo y HTML Embebido 
Crea un archivo PHP que imprime un formulario HTML usando la función echo. 
El formulario debe contener un campo de texto para el nombre y un botón de envío. 
Cuando el formulario se envía, muestra el nombre ingresado utilizando la misma página PHP. 
*/
echo "Ejercicios Tema 2: Sintaxis PHP"."<br></br>";
echo "Ej.1"."<br></br>";


echo '
<form method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <input type="submit" value="Enviar">
</form>';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    

    echo "Hola, " . ($_POST["nombre"]) . "<br><br>";
}

?>