<?php
function printArray($array)
{
    echo ("<pre>");
    print_r($array);
    echo ("<p/re>");
}

$calificaciones = [
    "Ana" => [
        "Matematicas" => 3,
        "Historia" => 4,
        "Ingles" => [
            2,
            3,
            4
        ]
    ],
    "Juan" => [
        "Matematicas" => 3.5,
        "Historia" => 4.2,
        "Ingles" => 1,
    ],
    "Pedro" => [
        "Matematicas" => 1,
        "Historia" => 1,
        "Ingles" => 1,
    ],
];
printArray($calificaciones);
echo count($calificaciones, COUNT_RECURSIVE);

$calificaciones["Ana"]["Matematicas"] = 5;
printArray($calificaciones);

?>