<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "sakila";

// conexion para 000webhost
if ($_SERVER['HTTP_HOST']=='josueparra.000webhostapp.com') {
    $username = "id18480490_root";
    $password = "QJ8d$-R!Yp+_v4Jq";
    $database = "id18480490_sakila";
}

$conexion = mysqli_connect($hostname, $username, $password, $database) 

or die("No se pudo conectar a la base de datos: " . mysqli_connect_error())

;