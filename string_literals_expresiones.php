<?php
// Definición de variables
$nombre = "Nestor";
$edad = 25;
$precio = 100.50;

// Uso de literales de cadena con comillas dobles para insertar variables y expresiones
echo "Hola, mi nombre es $nombre y tengo $edad años.<br>";
echo "El precio del producto es $precio dólares.<br>";

// Concatenación de cadenas usando el operador de concatenación (punto)
$mensaje = "Hola, mi nombre es " . $nombre . " y tengo " . $edad . " años.";
echo $mensaje . "<br>";

// Ejemplo de expresión dentro de una cadena con comillas dobles
$suma = 10 + 5;
echo "La suma de 10 + 5 es $suma.<br>";

// Ejemplo de uso de comillas dobles para incluir comillas simples dentro de la cadena
echo "Este es un ejemplo de cómo incluir comillas simples: 'comillas simples'.<br>";

// Ejemplo de uso de comillas simples para evitar la interpretación de variables
echo 'Hola, mi nombre es $nombre y tengo $edad años.<br>';
?>

