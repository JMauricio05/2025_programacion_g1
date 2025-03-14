<?php

interface FigurasGeometricas
{
    function area();
    function toString();
}

abstract class Model
{
    abstract function prueba();

    function set($prop, $val)
    {
        $this->{$prop} = $val;
    }

    function get($prop)
    {
        return $this->{$prop};
    }
}

class Figura extends Model implements FigurasGeometricas
{

    function area()
    {
        echo 'Area';
    }

    function toString()
    {
        echo 'toString';
    }

    function prueba()
    {
        echo 'Prueba';
    }
}

class Cuadrado extends Figura
{
    protected $arista;

    function area()
    {
        return pow($this->arista, 2);
    }

    function toString()
    {
        $area = $this->area();
        return "Cuadrado con area $area";
    }

    function prueba()
    {
        parent::prueba();
        $area =  pow($this->arista, 2);
        return "Cuadrado prueba con area $area";
    }
}

class Triangulo extends Figura
{
    protected $base;
    protected $altura;

    function area()
    {
        return ($this->base * $this->altura) / 2;
    }

    function toString()
    {
        $area = $this->area();
        return "Triangulo con area $area";
    }
}

// $cuadrado = new Cuadrado();
// $cuadrado->set('arista', 5);
// echo '<br>' . $cuadrado->prueba();
// $triangulo = new Triangulo();
// $triangulo->set('base', 5);
// $triangulo->set('altura', 2);
// echo '<br>' . $triangulo->toString();
