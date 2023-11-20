<?php

// Ciclos

// While

$numero = 0;
while($numero <= 10){
    echo "<p> $numero </p>";
    $numero++; // $numero = $numero + 1;
};

// Do While
$numero = 0;
do{
    echo "<p> $numero </p>";
    $numero++;
}while( $numero > 5 );

// Ejercicio
// Cree un programa que imprima los numeros del 1 - 15 en una lista


// For
for($i = 0; $i < 10; $i++){
    echo "El numero es: $i <br>";
}

// Ejercicio: Escriba una tabla de multiplicar del 1 al 10 en formato de tabla <table border='1'></table>

/*
1 X 5 = 5
2 X 5 = 10
3 X 5 = 15
.
.
.
10 X 5 = 50
*/


// Foreach
/*

foreach($array as $valor){
    // Codigo
}

*/

// Arreglo o Matriz o Array
$array = array("manzana", "pera", "naranja", 5, 4.2, TRUE, array(1,2,3));
$array_2 = [1,2,3,4,5,6];

print_r($array);
echo "<br>";
echo $array[2];


$colores = ['rojo', 'verde', 'amarillo'];
foreach($colores as $color){
    echo "$color <br>";
}

// Cree un arreglo de nombres de 5 elementos y recorralo con un foreach y salude a cada uno









echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";