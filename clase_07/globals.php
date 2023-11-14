<?php

// Globals - Variables en Global Scope
// $GLOBALS

// Ejempo
$x = 75;
$y = 25;

function suma(){
    $GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"];
}

suma();
echo $z;

echo "<br>";

echo "<pre>";
print_r($GLOBALS);
echo "</pre>";