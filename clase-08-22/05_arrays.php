<?php

function printArray($array)
{
    echo ("<pre>");
    print_r($array);
    echo ("<p/re>");
}
// Inicializacion de arreglos
$arreglo = ["Camilo", "Jose", "Daniel"];
$arreglo_2 = array("Camilo2", "Jose2", "Daniel2");

printArray($arreglo);
printArray($arreglo_2);
// agregar items
$arreglo[] = "Andres";
printArray($arreglo);

// mostrar total de elementos
echo "El numero total de dombres es: " . count($arreglo);
echo "</br>";
echo "El nombre con indice 2 es $arreglo[2]";
echo "</br>";
echo "El ultimo nombre es " . end($arreglo);

// ordena alfabeticamente 
sort($arreglo);
printArray($arreglo);

//eliminar ultimo elemento
array_pop($arreglo);
printArray($arreglo);

// eliminar por indice 
unset($arreglo[0]);
printArray($arreglo);

?>