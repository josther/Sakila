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
                    <label for="">tiendas</label>
                </div>

                <div class="mb-3">
                <select class="form-select" name="store_id">
                    <option value="" selected>Seleccione</option>

                    <?php

                    $query="SELECT * FROM store";

                    $resultado = mysqli_query($conexion, $query);

                    if ($resultado) {
                        while ($fila = mysqli_fetch_object($resultado)) {
                            echo "<option value='$fila->manager_staff_id'>$fila->store_id</option>";
                        }
                    }

                    ?>
                </select>
                </div>
                <br>

            <form class="col-6 " method="post">
                <div class="mb-3">
                    <label for="">gerente</label>
                </div>

                <div class="mb-3">
                <select class="form-select" name="manager_staff_id">
                    <option value="" selected>Seleccione</option>

                    <?php

                    $query="SELECT * FROM store";

                    $resultado = mysqli_query($conexion, $query);

                    if ($resultado) {
                        while ($fila = mysqli_fetch_object($resultado)) {
                            echo "<option value='$fila->address_id'>$fila->manager_staff_id</option>";
                        }
                    }

                    ?>
                </select>
                </div>
                <br>

            <form class="col-6 " method="post">
                <div class="mb-3">
                    <label for="">direcciones</label>
                </div>

                <div class="mb-3">
                <select class="form-select" name="address_id">
                    <option value="" selected>Seleccione</option>

                    <?php

                    $query="SELECT * FROM store";

                    $resultado = mysqli_query($conexion, $query);

                    if ($resultado) {
                        while ($fila = mysqli_fetch_object($resultado)) {
                            echo "<option value='$fila->last_update'>$fila->address_id</option>";
                        }
                    }

                    ?>
                </select>
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