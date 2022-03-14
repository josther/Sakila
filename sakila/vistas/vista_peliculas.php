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
            <form class="col-6" method="post">
                <div class="mb-3">
                    <label for="">id Peliculas</label>
                </div>
                
                <div class="mb-3">
                <select class="form-select" name="film_id">
                    <option value="" selected>Selecione</option>

                    <?php

                    $query = "SELECT * FROM film";

                    $resultado = mysqli_query($conexion, $query);

                    if ($resultado) {
                        while ($fila = mysqli_fetch_object($resultado)) {
                            echo "<option value='$fila->title'>$fila->film_id</option>";
                        }
                    }

                    ?>
                </select>
                </div>
                <br>

                <div class="mb-3">
                    <label for="">titulo</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <br>

                <div class="mb-3">
                    <label for="">descricion</label>
                    <input type="text" name="description" class="form-control">
                </div>
                <br>

                <div class="mb-3">
                    <label for="">año de lanzamiento</label>
                    <input type="text" name="release_year" class="form-control">
                </div>
                <br>

            <form class="col-6" method="post">
                <div class="mb-3">
                    <label for="">lenguaje id</label>
                </div>

                <div class="mb-3">
                <select class="form-select" name="language_id">
                    <option value="" selected>Seleccione</option>

                    <?php

                    $query = "SELECT * FROM film";

                    $resultado = mysqli_query($conexion, $query);

                    if ($resultado) {
                        while ($fila = mysqli_fetch_object($resultado)) {
                            echo "<option value='$fila->original_language_id'>$fila->language_id</option>";
                        }
                    }

                    ?>
                </select>
                </div>
                <br>

            <form class="col-6" method="post">
                <div class="mb-3">
                    <label for="">lenguaje original</label>
                </div>

                <div class="mb-3">
                <select class="form-select" name="original_language_id">
                    <option value="" selected>Seleccione</option>

                    <?php

                    $query = "SELECT * FROM film";

                    $resultado = mysqli_query($conexion, $query);

                    if ($resultado) {
                        while ($fila = mysqli_fetch_object($resultado)) {
                            echo "<option value='$fila->rental_duration'>$fila->original_language_id</option>";
                        }
                    }

                    ?>
                </select>
                </div>
                <br>

                <div class="mb-3">
                    <label for="">duracion de la renta</label>
                    <input type="text" name="rental_duration" class="form-control">
                </div>
                <br>

                <div class="mb-3">
                    <label for="">tasa de arrendamiento</label>
                    <input type="text" name="rental_rate" class="form-control">
                </div>
                <br>

                <div class="mb-3">
                    <label for="">longitud</label>
                    <input type="text" name="legth" class="form-control">
                </div>
                <br>

                <div class="mb-3">
                    <label for="">costo de remplazo</label>
                    <input type="text" name="replacement_cost" class="form-control">
                </div>
                <br>

                <div class="mb-3">
                    <label for="">clasificacion</label>
                    <input type="text" name="rating" class="form-control">
                </div>
                <br>

                <div class="mb-3">
                    <label for="">características especiales</label>
                    <input type="text" name="special_features" class="form-control">
                </div>
                <br>

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
        <?php
        require_once "parte_footer.php"
        ?>
    </div>
</body>

</html>