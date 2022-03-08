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
            <form class="col-6 " method="post">
                <div class="mb-3">
                    <label for="">Nombre</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="mb-3">
                    <button name=boton-guardar class="btn btn-outline-secondary">Guardar</button>
                </div>
            </form>

            <?php if (!empty($error)): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $error; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>

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

                        <?php 

                    $query = "SELECT * FROM film";

                    $buscador = $_GET['buscador'] ?? "";
                    if ($buscador != ""){
                        $query = "SELECT * FROM film WHERE title = '$buscador'";
                    }


                    $resultado = mysqli_query($conexion, $query);

                    if ($resultado) {
                        while($fila = mysqli_fetch_object($resultado)) {
                        echo "
                        <tr>
                            <td>{$fila->film_id}</td>
                            <td>{$fila->title}</td>
                            <td>{$fila->description}</td>
                            <td>{$fila->release_year}</td>
                            <td>{$fila->language_id}</td>
                            <td>{$fila->original_language_id}</td>
                            <td>{$fila->rental_duration}</td>
                            <td>{$fila->rental_rate}</td>
                            <td>{$fila->length}</td>
                            <td>{$fila->replacement_cost}</td>
                            <td>{$fila->rating}</td>
                            <td>{$fila->special_features}</td>
                            <td>{$fila->last_update}</td>
                        </tr>";
                        }
                    }

                    ?>
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