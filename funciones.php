<?php

function saludar()
{
    echo 'Hola<br>';
}

saludar();

function getSaludo()
{
    return 'Hola<br>';
}

echo getSaludo();


function saludarDos($nombre)
{
    echo "Hola $nombre<br>";
}
saludarDos("Pepe");

function saludarTres($nombre, $apellido)
{
    echo "Hola $nombre $apellido<br>";
}
saludarTres('Pepe', 'ABC');

function saludarCuatro($nombre, $apellido = null)
{
    if (empty($apellido)) {
        echo "Hola $nombre<br>";
    } else {
        echo "Hola $nombre $apellido<br>";
    }
}
saludarCuatro('Pepe', 'CBA');
saludarCuatro('Ana');

function saludarCinco(...$params)
{
    $nombre = $params[0];
    $apellido = $params[1];
    $edad = $params[2];
    echo "Hola $nombre $apellido<br>";
}

function saludarSeis(string $nombre, int $edad)
{
    echo "Hola $nombre<br>";
}