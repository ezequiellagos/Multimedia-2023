<?php

$productos = [
    [
        "nombre" => "Monitor",
        "precio" => 150,
        "unidades_vendidas" => 3
    ],
    [
        "nombre" => "Teclado",
        "precio" => 30,
        "unidades_vendidas" => 15
    ],
    [
        "nombre" => "Disco Duro",
        "precio" => 45,
        "unidades_vendidas" => 7
    ],

];

$precio_total = 0;
foreach ($productos AS $producto){
    $precio_total += $producto["precio"] * $producto["unidades_vendidas"];
}

echo "El precio total es de $precio_total Dólares <br>";