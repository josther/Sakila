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
        <h5>Idiomas</h5>
        <form action="" method="get">
            <br>
            <div class="mb-3">
                <label for="">Nombre</label>
                <input type="text" style="width : 300px;heigth : 300px " name="Nombre" class="form-control">
            </div>
            <br>
            <button class="btn btn-warning">Guardar</button>
        </form>
    </div>
    <br>

    <table class="default" WIDTH="50%" ALIGN="center">
        <h5 ALIGN="center">Listado de Idiomas</h5>
        <thead>
            <tr>
                <th scope="row">ID</th>
                <th scope="col">Nombre</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <th scope="col">...</th>
            </tr>
            <br>
            <tr>
                <th scope="row">2</th>
                <th scope="col">...</th>
            </tr>
            <br>
            <tr>
                <th scope="row">3</th>
                <th scope="col">...</th>
            </tr>

        </tbody>
    </table>


</body>
</html>