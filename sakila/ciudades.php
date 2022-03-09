<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina="Ciudades";

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
        $city = $_POST["city"];
        $country_id = $_POST['country_id'];

        //validaciones
        if(empty($city)) {
            throw new Exception("La ciudad no puede estar vacio");
        }

        //guardar
        $query = "INSERT INTO city (city, country_id) VALUES ('$city', '$country_id')";

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
require_once "vistas/vista_ciudades.php";