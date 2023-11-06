<?php

// Operadores logicos

$es_estudiante = TRUE;
$trabaja = FALSE;

// AND &&
$es_estudiante AND $trabaja; // FALSE
$es_estudiante && $trabaja;

// OR ||
$es_estudiante OR $trabaja; // TRUE
$es_estudiante || $trabaja;

// NOT !
!$es_estudiante; // FALSE

// Operadores Relacionales
// == igual
// === identico
// != distinto
// !== distinto y no identico
// < menor que
// <= menor o igual
// > mayor que
// >= mayor o igual

$num_1 = 5;
$num_2 = 7;

var_dump($num_1 == $num_2);
echo "<br>";
var_dump(5 == "5");
echo "<br>";
var_dump(5 === "5");
echo "<br>";
var_dump( 5 !== "5" );
echo "<br>";
var_dump( 5 >= "8" );

// Tarea: Averiguar el operador nave espacial
// <=> nave espacial