<?php
// Definir una pila
$pila = [];

// Apilar elementos en la pila
array_push($pila, "Libro 1");
array_push($pila, "Libro 2");
array_push($pila, "Libro 3");

echo "Elementos en la pila después de apilar:<br>";
print_r($pila); // Mostrar el contenido 

// Desapilar (quitar el último elemento)
$elementoDesapilado = array_pop($pila);

echo "<br><br>Elemento desapilado: " . $elementoDesapilado . "<br>";
echo "Elementos en la pila después de desapilar:<br>";
print_r($pila); // Mostrar el contenido de la pila después de desapilar
?>

