<?php

// Datos de conexion a la base de datos
$db_host = "localhost";
$db_name = "escuela_2";
$db_user = "root";
$db_pass = "";

// Crear una conexion de manera procedural
$conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Verificar la conexión
if (!$conexion){
    die("Conexion fallida: " . mysqli_connect_error());
}

// Obtener datos de la tabla
$sql = "SELECT * FROM alumnos";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $sql);

//print_r($resultado);

// Verificar si hay resultados
if (mysqli_num_rows($resultado) > 0){
    // Mostrar los datos de cada fila
    while($row = mysqli_fetch_assoc($resultado)){
        echo "ID: " . $row['id'] . " | Nombre: " . $row['nombre'] . "<br>";
    }
}else{
    echo "No hay resultados";
}

// Cerrar la conexion
mysqli_close($conexion);