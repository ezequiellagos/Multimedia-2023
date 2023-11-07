<?php

// Arreglos multidimensional

$arreglo = [
    [
        "nombre" => "Juan",
        "apellido" => "Perez",
        "edad" => 25,
    ],
    [
        "nombre" => "Pedro",
        "apellido" => "Gomez",
        "edad" => 40,
    ],
];

foreach ($arreglo AS $valor){
    foreach ($valor AS $key => $valor2){
        echo "$key: $valor2";
        echo "<br>";
    }
}

echo "<br>";

$frutas = [
    "manzana", "pera", "naranja"
];

// ver un elemento
echo $frutas[2];
echo "<br>";

// modificar un elemento
$frutas[2]  = "uva";
echo $frutas[2];
echo "<br>";

// añadir un elemento
$frutas[] = "naranja";

echo "<pre>";
print_r($frutas);
echo "</pre>";

// arreglo asociativo
$persona = [
    "nombre" => "Juan",
    "apellido" => "Perez",
    "edad" => 70,
];

// modificar
$persona["nombre"] = "Pedro";

// añadir 
$persona["telefono"] = "123456789";

echo "<pre>";
print_r($persona);
echo "</pre>";


// Tarea: investigar como ordenar los arreglos y eliminar elementos de un arreglo