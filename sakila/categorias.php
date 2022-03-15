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
    if (isset($_POST['boton-guardar']) ) {
    

            // buscar info para editar
    if ($isser($_GET['boton-guardar'])) {
        $category_id = $_GET['editar'];

        $query = "SELECT * FROM category WHERE category_id = '$category_id' ";

        $resultado = mysqli_query($conexion, $query);

        if ($resultado) {
            while ($fila = mysqli_fetch_object($resultado)) {
                $category_id = $fila->category_id;
                $name = $fila->name;
            }
        }
    }
        //variable
        $name = $_POST["name"];
        //validaciones
        if(empty($name)) {
            throw new Exception("El nombre no puede estar vacio");
        }
        //guardar
        $query = "INSERT INTO category (name) VALUES ('$name')";

        // actualizar
        $id = $_POST['id'] ?? '';

        if ( !empty($id) ) {
            $query = "UPDATE category SET name = '$name' WHERE category_id = '$id' ";
        }

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
require_once "vistas/vista_categorias.php";