<?php
// Definir una cola
$cola = [];

// Añadir elementos
array_push($cola, "Persona 1");
array_push($cola, "Persona 2");
array_push($cola, "Persona 3");

echo "Elementos en la cola después de agregar:<br>";
print_r($cola); // Mostrar el contenido

// Eliminar el primer elemento de la cola (FIFO)
$elementoRemovido = array_shift($cola);

echo "<br><br>Elemento removido: " . $elementoRemovido . "<br>";
echo "Elementos en la cola después de remover el primero:<br>";
print_r($cola); // Mostrar el contenido de la cola después de remover
?>

