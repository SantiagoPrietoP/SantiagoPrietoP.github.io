<?php


$host = "localhost";
$User = "root";
$pass = "";

$db = "sesion";

$conexion = mysqli_connect($host, $User, $pass, $db);

if (!$con) {
    echo "Conexion Fallida";
}