<?php

// Texto - String - Str
$texto = "Esto es un 'texto'";
$texto_2 = 'Esto "es" otro texto';

// Caracteres - Char
$caracter = "b";

// Enteros - Intger - Int
$numero_entero = 5;

// Decimales - Float - Flotantes
$numero_decimal = 4.5;

// Booleanos
$verdadero = true;
$falso = false;

// Nulo - Null
$nulo = null;

/* 
PHP es un lenaguaje de tipado debil
es capaz de inferir cual es el tipo de dato
de una variable segun su contexto
*/

$numero_1 = 1;
$numero_2 = "2a";

var_dump($numero_1);
var_dump($numero_2);

echo "<br>";

echo $numero_1 + $numero_2;
