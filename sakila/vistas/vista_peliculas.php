<?php


require_once "parte_head.php";
?>

<body>


    <?php
    require_once "parte_menu.php";
    ?>
    <div class="container">
        <h3><?php echo $pagina; ?></h3>
        <div class="row">
            <form class="col-6 ">
                aqui va el formulario
            </form>
        </div>

        <div class="row">
            <div class="col-4 ">
                <form class="input-group mb-3">
                    <input type="text" name="buscador" class="form-control" placeholder="Buscador">
                    <button class="btn btn-outline-secondary" type="submit" name="boton-buscar"><i
                            class="bi bi-search"></i>Buscar</button>
            </div>

            </form>
        </div>

        <div class="row">
            <div class="col-12 bg-">
                <table class="table table-dark table table.striped">
                    <thead>
                        <tr>
                            <th scope="col">ID Pelicula</th>
                            <th scope="col">titulo</th>
                            <th scope="col">descripsion</th>
                            <th scope="col">Año de lansamiento</th>
                            <th scope="col">ID Idioma</th>
                            <th scope="col">ID Idioma original</th>
                            <th scope="col">duracion del alquiler</th>
                            <th scope="col">Arrendamiento</th>
                            <th scope="col">duracion</th>
                            <th scope="col">Costo de remplazo</th>
                            <th scope="col">clasificacion</th>
                            <th scope="col">facturas especiales</th>
                            <th scope="col">fecha actualisacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
        require_once "parte_footer.php"
        ?>
    </div>
</body>

</html>