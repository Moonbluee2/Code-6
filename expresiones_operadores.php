<?php
// Variables para operaciones
$a = 15;
$b = 4;

// Operadores aritméticos
$suma = $a + $b;
$resta = $a - $b;
$multiplicacion = $a * $b;
$division = $a / $b;
$modulo = $a % $b;

// Operadores de comparación
$es_igual = ($a == $b);
$es_distinto = ($a != $b);
$es_mayor = ($a > $b);
$es_menor = ($a < $b);
$es_mayor_igual = ($a >= $b);
$es_menor_igual = ($a <= $b);

// Operadores lógicos
$y_logico = ($a > 10 && $b < 5);
$o_logico = ($a > 10 || $b > 5);
$no_logico = !($a > 10);

// Mostrar resultados de operadores aritméticos
echo "Operadores Aritméticos:<br>";
echo "Suma: $a + $b = $suma <br>";
echo "Resta: $a - $b = $resta <br>";
echo "Multiplicación: $a * $b = $multiplicacion <br>";
echo "División: $a / $b = $division <br>";
echo "Módulo: $a % $b = $modulo <br><br>";

// Mostrar resultados de operadores de comparación
echo "Operadores de Comparación:<br>";
echo "\$a == \$b: " . ($es_igual ? 'Verdadero' : 'Falso') . "<br>";
echo "\$a != \$b: " . ($es_distinto ? 'Verdadero' : 'Falso') . "<br>";
echo "\$a > \$b: " . ($es_mayor ? 'Verdadero' : 'Falso') . "<br>";
echo "\$a < \$b: " . ($es_menor ? 'Verdadero' : 'Falso') . "<br>";
echo "\$a >= \$b: " . ($es_mayor_igual ? 'Verdadero' : 'Falso') . "<br>";
echo "\$a <= \$b: " . ($es_menor_igual ? 'Verdadero' : 'Falso') . "<br><br>";

// Mostrar resultados de operadores lógicos
echo "Operadores Lógicos:<br>";
echo "(\$a > 10 && \$b < 5): " . ($y_logico ? 'Verdadero' : 'Falso') . "<br>";
echo "(\$a > 10 || \$b > 5): " . ($o_logico ? 'Verdadero' : 'Falso') . "<br>";
echo "!(\$a > 10): " . ($no_logico ? 'Verdadero' : 'Falso') . "<br>";
?>

