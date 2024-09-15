<?php
// Declaración de una cadena de texto
$texto = "Hola, PHP es genial!";

// Obtener la longitud de la cadena
$longitud = strlen($texto);

// Reemplazar una palabra en la cadena
$texto_reemplazado = str_replace("genial", "increíble", $texto);

// Extraer una subcadena
$subcadena = substr($texto, 6, 3); // Empieza en el índice 6 y toma 3 caracteres

// Mostrar resultados
echo "Cadena original: $texto <br>";
echo "Longitud de la cadena: $longitud <br>";
echo "Texto después de reemplazar 'genial' con 'increíble': $texto_reemplazado <br>";
echo "Subcadena extraída (empieza en el índice 6 y toma 3 caracteres): $subcadena <br>";
?>

