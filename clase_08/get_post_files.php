<?php

// $_GET
echo "GET:";
echo "<pre>";
print_r($_GET);
echo "</pre>";

#http://localhost/Multimedia-2023/clase_08/get_post_files.php?nombre_2=jaun&edad=#

// $_POST
echo "POST:";
echo "<pre>";
print_r($_POST);
echo "</pre>";

// $_REQUEST
echo "REQUEST: ";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo $_REQUEST["edad"];
}

// $_FILES
echo "<br>";
echo "FILES:";
echo "<pre>";
print_r($_FILES);
echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <label for="nombre_1" class="form-label">Nombre</label>
                    <input type="text" id="nombre_1" name="nombre_2" class="form-control">

                    <label for="edad" class="form-label">Edad</label>
                    <input type="number" id="edad" name="edad" class="form-control">

                    <label for="archivo" class="form-label">Archivo</label>
                    <input type="file" name="archivo" id="archivo" class="form-control">

                    <input type="submit" value="Enviar" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

    
    
</body>
</html>