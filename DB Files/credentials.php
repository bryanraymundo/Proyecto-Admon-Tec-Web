<?php
$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = "redmi";
$dbname = "login";

$conexion = mysqli_connect ($dbhost,$dbuser,$dbpass,$dbname);

if (!$conexion)
{
    die("Ocurrió un error").mysqli_connect_error();
}

?>