<?php
// Definir un arreglo (hash) con nombres como clave y edades como valor
$personas = [
    "Juan" => 25,
    "María" => 30,
    "Pedro" => 28,
    "Ana" => 22
];

// Recorrer el arreglo asociativo y mostrar cada nombre y edad
echo "Nombres y edades:<br>";
foreach ($personas as $nombre => $edad) {
    echo "$nombre tiene $edad años.<br>";
}
?>


