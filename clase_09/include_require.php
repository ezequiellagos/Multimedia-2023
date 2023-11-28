<?php

// Include y require permiten incluir un archivo dentro de otro

// si el archivo no existe el script sigue funcionando
//include "procesoo.php";
//include "proceso.php";

// si el archivo no existe el script se detiene
//require "proceso.php";
//require "proceso.php";

// si el archivo ya fue incluido, no lo lo vuelve a incluir. Si el archivo no existe el script sigue funcionando
//include_once "proceso.php";
//include_once "proceso.php";

// si el archivo ya fue incluido, no lo lo vuelve a incluir. Si el archivo no existe el script se detiene
require_once "proceso.php";
require_once "proceso.php";

//$resultado = suma(10,5);
//echo $resultado;