<?php

// Sesiones
// Son una manera de almacer informacion en variables para ser usadas en diferentes páginas.
// La información se almacena en el servidor y no en la computadora del usuario.

// Cookies
// Son una manera de almacer informacion en variables para ser usadas en diferentes páginas.
// La información se almacena en la computadra del usuario.

// Establecer el tiempo de vida de la sesion en segundos
$tiempo_de_vida = 600; // 600 segundos = 10 minutos
ini_set('session.gc_maxlifetime', $tiempo_de_vida);

// Iniciar sesion
session_start();

// Configurar variables de sesion
$_SESSION["nombre"] = "Juan";
$_SESSION["apellido"] = "Perez";

echo "Nombre: " . $_SESSION["nombre"] . " Apellido: " . $_SESSION['apellido'];


//Para eliminar una variable de sesion
unset($_SESSION["nombre"]);

//Para eliminar todas las variables de sesion
session_destroy();

// Cookies

$nombre = "usuario";
$valor = "Ernesto Perez";
$tiempo_de_vida = time() + (86400 * 30); // 86400 = 1 día

setcookie($nombre, $valor, $tiempo_de_vida);

// Mostrar una cookie
echo $_COOKIE[$nombre];

// Eliminar una cookie
setcookie($nombre, "", time() - 3600);

// Eliminar todas las cookies
foreach ($_COOKIE as $clave => $valor){
    setcookie($clave, "", time() - 3600);
}
