<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina="Clientes";

$error = "";

try {
    # borrrar esto despues
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //verificar si le da click al boton
    if ( isset($_POST['boton-guardar']) ) {
        echo "guardando...";
        //variable
        $first_name = $_POST["first_name"];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $address_id = $_POST['address_id'];

        //validaciones
        if(empty($first_name)) {
            throw new Exception("El nombre no puede estar vacio");
        }

        if(empty($last_name)) {
            throw new Exception("El apellido no puede estar vacio");
        }

        if(empty($email)) {
            throw new Exception("El coreo no puede estar vacio");
        }

        if(empty($address_id)) {
            throw new Exception("La direcion no puede estar vacio");
        }

        //guardar
        $query = "INSERT INTO customer (first_name, last_name, email, address_id)
        VALUES ('$first_name', '$last_name', '$email'. '$address_id')";

        $resultado = $conexion->query($query) or die("Error en query");

        if ($resultado) {
            $_SESSION['mensaje'] = "Datos insertados correctamente";
            $script_alerta = 'alerta("Insertado", "Datos insertados correctamente", "success")';
        } else {
            $script_alerta = 'alerta("error", "No se pudo insertar", "error")';

            throw new Exception("No se pudo insertar los datos");
        }

        //refrezcar
        //refrezcar('categorias.php');
    }


    throw new Exception("");
} catch(Throwable $ex) {
    $error = $ex->getMessage();
}

# incluir vista
require_once "vistas/vista_clientes.php";