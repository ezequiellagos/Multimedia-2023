<?php

// IF

$edad = 25;
$nombre = "Pedro";

if(($edad >= 18) AND ($nombre == "Juan")){
    echo "$nombre es mayor de edad y es Juan <br>";
}elseif(($edad >= 18) AND ($nombre == "Pedro")){
    echo "Pedro es mayor de edad";
}else{
    echo "$nombre no es mayor de edad o no es Juan <br>"   ;
}

// Cree un programa que imprima si un umero es positivo, negativo o cero