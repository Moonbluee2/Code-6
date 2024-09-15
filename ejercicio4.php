<?php
// Declarar el número
$num = 5;
// Inicializar una variable para almacenar el resultado del factorial
$factorial = 1;
// Verificar si el número es válido (debe ser mayor o igual a 0)
if ($num < 0) {
    echo "No se puede calcular el factorial de un número negativo.";
} else {
    // Usar un bucle for para calcular el factorial
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i; // Multiplicar los valores secuencialmente
    }
    // Imprimir
    echo "El factorial de $num es: $factorial";
}
?>
