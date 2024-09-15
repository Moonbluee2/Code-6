<?php
// Declaración de cadenas de texto
$cadena1 = "Hola";
$cadena2 = 'Mundo';

// Concatenación usando el operador de punto (.)
$concatenacion_dobles = $cadena1 . " " . $cadena2;
$concatenacion_simples = $cadena1 . ' ' . $cadena2;

// Ejemplo con comillas dobles e interpolación de variables
$nombre = "Nestor";
$salida_dobles = "Hola, $nombre! Bienvenido.";

// Ejemplo con comillas simples (no se realiza interpolación)
$salida_simples = 'Hola, $nombre! Bienvenido.';

// Mostrar resultados
echo "Concatenación usando comillas dobles: $concatenacion_dobles <br>";
echo "Concatenación usando comillas simples: $concatenacion_simples <br>";
echo "Interpolación con comillas dobles: $salida_dobles <br>";
echo "Sin interpolación (comillas simples): $salida_simples <br>";
?>

