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
                    <label for="">Nombre</label>
                    <input type="text" name="first_name" class="form-control">
                </div>
                <br>

                <div class="mb-3">
                    <label for="">Apellido</label>
                    <input type="text" name="last_name" class="form-control">
                </div>
                <br>

            <form clas="col-6" method="post">
                <div class="mb-3">
                    <label for="">Dirección</label>
                </div>

                <div class="mb-3">
                <select class="form-select" name="address_id">
                    <option value="" selected>Seleccione</option>

                    <?php

                    $query="SELECT * FROM staff";

                    $resultado = mysqli_query($conexion, $query);

                    if ($resultado) {
                        while ($fila = mysqli_fetch_object($resultado)) {
                            echo "<option value='$fila->email'>$fila->address_id</option>";
                        }
                    }

                    ?>
                </select>
                </div>
                <br>

                <div class="mb-3">
                    <label for="">Correo</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <br>

            <form class="col-6" method="post">
                <div class="mb-3">
                    <label for="">Tienda</label>
                </div>

                <div class="mb-3">
                <select class="form-select" name="store_id">
                    <option value="" selected>Seleccione</option>

                    <?php

                    $query="SELECT * FROM staff";

                    $resultado = mysqli_query($conexion, $query);

                    if ($resultado) {
                        while ($fila = mysqli_fetch_object($resultado)) {
                            echo "<option value='$fila->username'>$fila->store_id</option>";
                        }
                    }

                    ?>
                </select>
                </div>
                <br>

                <div class="mb-3">
                    <label for="">usuario</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <br>

                <div class="mb-3">
                    <label for="">Contraseña</label>
                    <input type="text" name=" password" class="form-control">
                </div>
                <br>

                <button name=boton-guardar class="btn btn-outline-secondary">Guardar</button>
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