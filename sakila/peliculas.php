<?php

require_once "recursos/conexion.php";
require_once "recursos/funciones.php";

$pagina="Peliculas";

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
        $film_id = $_POST["film_id"];
        $title = $_POST["title"];
        $description = $_POST["description"];
        $release_year = $_POST["release_year"];
        $language_id = $_POST["language_id"];
        $original_language_id = $_POST["original_language_id"];
        $rental_duration = $_POST["rental_duration"];
        $rental_rate = $_POST["rental_rate"];
        $length = $_POST["legth"];
        $replacement_cost = $_POST["replacement_cost"];
        $rating = $_POST["rating"];
        $special_features = $_POST["special_features"];
        
        //validaciones
        if(empty($title)) {
            throw new Exception("El nombre no puede estar vacio");
        }

        if(empty($description)) {
            throw new Exception("La descripcion no puede estar vacio");
        }

        if(empty($release_year)) {
            throw new Exception("El año de lanzamiento no puede estar vacio");
        }

        if(empty($rental_duration)) {
            throw new Exception("La duracion de renta no puede estar vacio");
        }

        if(empty($rental_rate)) {
            throw new Exception("El radio de renta no puede estar vacio");
        }

        if(empty($length)) {
            throw new Exception("La longitud no puede estar vacio");
        }

        if(empty($replacement_cost)) {
            throw new Exception("El costo de renplanso no puede estar vacio");
        }

        if(empty($rating)) {
            throw new Exception("La clasificacion no puede estar vacio");
        }

        if(empty($special_features)) {
            throw new Exception("Las caracteristicas especiales no puede estar vacio");
        }

        //guardar
        $query = "INSERT INTO film (film_id, title, description, release_year, language_id, original_language_id, rental_duration, rental_rate, length, replacement_cost, rating, special_features) VALUES ('$film_id', '$title', '$description', '$release_year', '$language_id', '$original_language_id', '$rental_duration', '$rental_rate', '$length', 'r$eplacement_cost', '$rating', '$special_features')";

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
require_once "vistas/vista_peliculas.php";