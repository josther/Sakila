<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina="Staff";

$error = "";

try {
    # borrrar esto despues
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //verificar si le da click al boton
    if (isset($_POST['boton-guardar'])) {
        echo "guardando...";
        //variable
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $address_id = $_POST["address_id"];
        $email = $_POST["email"];
        $store_id = $_POST["store_id"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        //validaciones
        if(empty($first_name)) {
            throw new Exception("El nombre no puede estar vacio");
        }

        if(empty($last_name)) {
            throw new Exception("El apellido no puede estar vacio");
        }

        if(empty($email)) {
            throw new Exception("El correo no puede estar vacio");
        }

        if(empty($username)) {
            throw new Exception("El usuario no puede estar vacio");
        }

        if(empty($password)) {
            throw new Exception("La contraseña no puede estar vacio");
        }

        //guardar
        $query = "INSERT INTO staff (first_name, last_name, address_id, email, store_id, username, password,)
        VALUES ('$first_name', '$last_name', '$address_id', '$email', '$store_id', '$username', '$password')";

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
require_once "vistas/vista_staff.php";