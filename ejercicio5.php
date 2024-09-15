<?php
//Entre el 1 y el 100
$numero_aleatorio = rand(1, 100);

// Imprimir el número generado
echo "Número generado: $numero_aleatorio<br>";

// Verificar si el número es mayor, menor o igual a 50
if ($numero_aleatorio > 50) {
    echo "El número $numero_aleatorio es mayor que 50.";
} elseif ($numero_aleatorio < 50) {
    echo "El número $numero_aleatorio es menor que 50.";
} else {
    echo "El número es exactamente 50.";
}
?>
