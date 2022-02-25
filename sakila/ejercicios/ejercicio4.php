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
        <h5>4. Calcular la hipotenusa de un triangulo</h5>
        <form action="" method="get">
            <div class="mb-3">
                <label for="">hipotenusa</label>
                <input type="text" name="hipotenusa" class="form-control">
            </div>

            <button class="btn btn-secondary">Resultado</button>

        </form>

        <?php
        
          $cateto1 = $_GET["cateto1"];
          $cateto2 = $_GET["cateto2"];

          $cateto3 = ($cateto1 + $cateto2);
          echo "$cateto3";
        
        ?>
    </div>
</body>

</html>