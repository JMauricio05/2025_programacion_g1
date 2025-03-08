<?php

class Persona
{
    private $nombre;
    private $apellido;
    private $edad;
    private $pasatiempos;

    function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = 18;
    }

    function mayorEdad()
    {
        return $this->edad >= 18 ? 'Si' : 'No';
    }

    function setEdad($val)
    {
        $this->edad = $val;
    }
    function getEdad()
    {
        return $this->edad;
    }
}

$persona =  new Persona("Pepe", "ABC");
$persona->setEdad(18);
echo $persona->mayorEdad();
