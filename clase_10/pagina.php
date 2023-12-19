
<?php

ini_set('session.gc_maxlifetime', 10);

session_start();

$_SESSION["curso"] = "Multimedia";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="otro_archivo.php" target="_self">Ir a otro_archivo.php</a>
</body>
</html>