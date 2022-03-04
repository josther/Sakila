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
                    <button class="btn btn-outline-secondary">Guardar</button>
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
                            <th scope="col">ID Cliente</th>
                            <th scope="col">ID Tienda</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">correo electronico</th>
                            <th scope="col">ID Dirección</th>
                            <th scope="col">activa</th>
                            <th scope="col">Dato creado</th>
                            <th scope="col">fecha actualisacion</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 

                    $query = "SELECT * FROM customer";

                    $buscador = $_GET['buscador'] ?? "";
                    if ($buscador != ""){
                        $query = "SELECT * FROM customer WHERE first_name = '$buscador'";
                    }


                    $resultado = mysqli_query($conexion, $query);

                    if ($resultado) {
                        while($fila = mysqli_fetch_object($resultado)) {
                        echo "
                        <tr>
                            <td>{$fila->customer_id}</td>
                            <td>{$fila->store_id}</td>
                            <td>{$fila->first_name}</td>
                            <td>{$fila->last_name}</td>
                            <td>{$fila->email}</td>
                            <td>{$fila->address_id}</td>
                            <td>{$fila->active}</td>
                            <td>{$fila->create_date}</td>
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