<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="container w-50">
        <h5>Digitar la base y la altura de un triángulo y calcular e imprimir la hipotenusa.</h5>
        <form action="" method="get">
            <div class="mb-3">
                <label for="">Base</label>
                <input type="text" name="base" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Altura</label>
                <input type="text" name="altura" class="form-control">
            </div>

            <button class="btn btn-dark">Calcular</button>

        </form>

        <?php

            $Base = $_GET["Base"];
            $Altura = $_GET["Altura"];

        ?>
    </div>
</body>

</html>