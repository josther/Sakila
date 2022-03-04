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
                            <th scope="col">ID personal</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">identificación de la dirección</th>
                            <th scope="col">imangen</th>
                            <th scope="col">correo</th>
                            <th scope="col">ID tienda</th>
                            <th scope="col">Activo</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">fecha actualisacion</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 

                    $query = "SELECT * FROM staff";

                    $buscador = $_GET['buscador'] ?? "";
                    if ($buscador != ""){
                        $query = "SELECT * FROM staff WHERE first_name = '$buscador'";
                    }


                    $resultado = mysqli_query($conexion, $query);

                    if ($resultado) {
                        while($fila = mysqli_fetch_object($resultado)) {
                        $imagen = '<img src="data:image/jpeg;base64,'.base64_encode($fila->picture) .'" />';
                        echo "
                        <tr>
                            <td>{$fila->staff_id}</td>
                            <td>{$fila->first_name}</td>
                            <td>{$fila->last_name}</td>
                            <td>{$fila->address_id}</td>
                            <td>{$imagen}</td>
                            <td>{$fila->email}</td>
                            <td>{$fila->store_id}</td>
                            <td>{$fila->active}</td>
                            <td>{$fila->username}</td>
                            <td>{$fila->password}</td>
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