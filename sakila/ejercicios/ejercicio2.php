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
        <h5>Digitar 4 notas y calcular e imprimir el promedio.</h5>
        <form action="" method="get">
            <div class="mb-3">
                <label for="">nota1</label>
            </div>

            <div class="mb-3">
                <label for="">nota2</label>
            </div>

            <div class="mb-3">
                <label for="">nota3</label>
            </div>

            <div class="mb-3">
                <label for="">nota4</label>
            </div>

            <button class="btn btn-success">promedio</button>

        </form>

        <?php
        
        print_r($_GET);
        
        ?>
    </div>
</body>

</html>