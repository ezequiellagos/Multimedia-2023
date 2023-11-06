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

