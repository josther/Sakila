<?php

$pagina="Tiendas";

$error = "";

try {

    throw new Exception("wey, klk");

} catch(Throwable $ex) {
    $error = $ex->getMessage();
}

require_once "vistas/vista_tiendas.php";