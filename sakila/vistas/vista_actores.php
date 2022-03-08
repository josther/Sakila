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
                    <label for=>Nombre</label>
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
                            <th scope="col">ID Actor</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">fecha actualisacion</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                    $query = "SELECT * FROM actor";

                    $buscador = $_GET['buscador'] ?? "";
                    if ($buscador != ""){
                        $query = "SELECT * FROM actor WHERE first_name = '$buscador'";
                    }

                    $resultado = mysqli_query($conexion, $query);

                    if ($resultado) {
                        while($fila = mysqli_fetch_object($resultado)) {
                            echo "
                            <tr>
                                <td>{$fila->actor_id}</td>
                                <td>{$fila->first_name}</td>
                                <td>{$fila->last_name}</td>
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