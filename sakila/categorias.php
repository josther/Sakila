<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina="Categorias";

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
        $name = $_POST["name"];
        //validaciones
        if(empty($name)) {
            throw new Exception("El nombre no puede estar vacio");
        }
        //guardar
        $query = "INSERT INTO category (name) values ('$name')";

        $resultado = $conexion->query($query) or die("Error en query");

        $resultado = $conexion->query($query);

        if ($resultado) {
            $_SESSION['mensaje'] = "Datos insertados correctamente";
        } else {
            throw new Exception("No se pudo insertar los datos");
        }

        //refrezcar
        refrezcar('categorias.php');
    }


    throw new Exception("");
} catch(Throwable $ex) {
    $error = $ex->getMessage();
}

# incluir vista
require_once "vistas/vista_categorias.php";