<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login";

$conexion = mysqli_connect ($dbhost,$dbuser,$dbpass,$dbname);  // Esta linea 

if (!$conexion)
{
    die("Ocurrió un error").mysqli_connect_error();
}

?>