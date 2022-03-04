<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "sakila";

$conexion = mysqli_connect($hostname, $username, $password, $database) 

or die("No se pudo conectar a la base de datos: " . mysqli_connect_error())

;