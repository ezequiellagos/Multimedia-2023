<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="procesar.php" method="POST">
        <select name="fruta" id="fruta">
            <!--
            <option value="manzana">manzana</option>
            <option value="pera">pera</option>
            <option value="naranja">naranja</option>
            -->

            <?php

            $frutas = [
                "sandia",
                "melon",
                "ciruela",
                "manzana",
                "pera",
                "uva",
            ];

            foreach ($frutas AS $fruta){
                echo "<option value='$fruta'>$fruta</option>";
            }

            ?>

        </select>

        <br>

        <input type="text" name="nombre" id="nombre">

        <br>

        <input type="submit" value="Enviar">
    </form>

    <!--
        https://google.com?query=php

        https://www.google.com/search?q=google&oq=google&sourceid=chrome&ie=UTF-8
     -->
    
</body>
</html>