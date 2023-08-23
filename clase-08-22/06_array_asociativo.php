<?php
function printArray($array)
{
    echo ("<pre>");
    print_r($array);
    echo ("<p/re>");
}

// $edades2 = array(
//     "Ana" => 10,
//     "Juan" => 32,
//     "Maria" => 25,
//     "Carlos" => 30,
//     "Luis" => 22,
// );

$edades = [
    "Ana" => 10,
    "Juan" => 32,
    "Maria" => 25,
    "Carlos" => 30,
    "Luis" => 22,
];
printArray($edades);

// nuevas entradas
$edades["Camilo"] = 21;
printArray($edades);

// count
echo "Cantidad de elementos en arreglo: " . count($edades);
echo "<br>";

// ultimo elemento
echo "El ultimo elemento es: " . end($edades);
echo "<br>";

// pop
array_pop($edades);
printArray($edades);

// eliminar especifco

unset($edades["Juan"]);
printArray($edades);
?>