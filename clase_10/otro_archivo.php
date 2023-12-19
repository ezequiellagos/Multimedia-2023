<?php

session_start();

//Mostrar las variables de sesion

if (isset($_SESSION['curso'])){
    echo "Estamos en: " . $_SESSION['curso'];
} else {
    echo "No hay sesion iniciada";
}