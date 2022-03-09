<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina="Paises";

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
        $country = $_POST["country"];
        //validaciones
        if(empty($country)) {
            throw new Exception("El pais no puede estar vacio");
        }
        //guardar
        $query = "INSERT INTO country (country) VALUES ('$country')";

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
require_once "vistas/vista_paises.php";