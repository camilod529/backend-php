<?php
require_once './Persona.php';
require_once './Info.php';
class Empleado extends Persona implements Info
{
    private $numeroEmpleado;
    private $salario;

    public function __construct($nombre, $edad, $genero, $numeroEmpleado, $salario)
    {
        parent::__construct($nombre, $edad, $genero); // es como el super, para llamar el constructor del padre
        $this->numeroEmpleado = $numeroEmpleado;
        $this->salario = $salario;
    }

    public function getSalario()
    {
        return $this->salario;
    }


    public function setSalario($salario): self
    {
        $this->salario = $salario;
        return $this;
    }


    public function getNumeroEmpleado()
    {
        return $this->numeroEmpleado;
    }

    public function setNumeroEmpleado($numeroEmpleado): self
    {
        $this->numeroEmpleado = $numeroEmpleado;
        return $this;
    }
    public function getInformacion()
    {
        return "Empleado: {$this->getNombre()} <br>Numero Empleado: {$this->numeroEmpleado}";
    }
    public function mostrarInformacion()
    {
        echo $this->getInformacion();
    }
}