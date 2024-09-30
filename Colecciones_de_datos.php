<?php
// Definir un arreglo con 5 números
$numeros = [10, 20, 30, 40, 50];

// Usar un bucle foreach para mostrar cada número
echo "Números en el arreglo:<br>";
foreach ($numeros as $numero) {
    echo $numero . "<br>";
}

// Usar un bucle for para sumar todos los números del arreglo
$suma = 0;
for ($i = 0; $i < count($numeros); $i++) {
    $suma += $numeros[$i];
}

echo "<br>La suma de los números es: " . $suma;
?>


