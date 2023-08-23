<?php

require_once './Persona.php';
require_once './Empleado.php';

echo "<h1>POO</h1>";
echo "<h2>Instancia persona</h2>";

$persona = new Persona("Camilo", 22, "Masculino");

echo $persona;

// acceder metodos de clase
echo "<br>";
echo "Nombre: {$persona->getNombre()}, Edad: {$persona->getEdad()}, Genero: {$persona->getGenero()}";

echo "<br>";
echo "<h2>instancia empleado</h2>";
$empleado = new Empleado("Fabian", 24, "Masculino", 001, 5000000);

echo "Nombre: {$empleado->getNombre()}, Edad: {$empleado->getEdad()}, Genero: {$empleado->getGenero()}, Numero Empleado: {$empleado->getNumeroEmpleado()}, Salario: {$empleado->getSalario()}<br><br>";

$empleado->mostrarInformacion();