<?php

$pagina="Categorias";

$error = "";

try {

    throw new Exception();

} catch(Throwable $ex) {
    $error = $ex->getMessage();
}

# incluir vista
require_once "vistas/vista_categorias.php";