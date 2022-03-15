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
                <input type="text" name="id" value="<?php echo $category_id ?? ""; ?>">
                <div class="mb-3">
                    <label for="">id categorias</label>
                </div>
                
                <div class="mb-3">
                <select class="form-select" name="category_id">
                    <option value="" selected>Selecione</option>

                    <?php

                    $query = "SELECT * FROM category";

                    $resultado = mysqli_query($conexion, $query);

                    if ($resultado) {
                        while ($fila = mysqli_fetch_object($resultado)) {
                            echo "<option value='$fila->name'>$fila->category_id</option>";
                        }
                    }

                    ?>
                </select>
                </div>
                <br>

                <div class="mb-3">
                    <label for="">categorias</label>
                    <input value="<?php echo $name ?? ''; ?>" type="text" name="name" class="form-control">
                </div>
                <br>

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
        <?php
        require_once "parte_footer.php"
        ?>
    </div>
</body>

</html>