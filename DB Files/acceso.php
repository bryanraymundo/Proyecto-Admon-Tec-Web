<?php

include("credentials.php");

$nombre = $_POST["user"];
$pass = $_POST["contrasena"];
$email = $_POST["correo"];
//
if (isset($_POST["btnSumit"]))
{
    $query = mysqli_query($conexion, "SELECT * FROM usuario WHERE full_name = '$nombre' and password = '$pass'");
    $ok = mysqli_num_rows($query);
    if ($ok == 1)
    { 
        echo "<script> alert("¡Bienvenido $nombre!") window.location = 'Dashboard.html'</script>";
    }else
    {
        echo "<h1>Error de credenciales</h1>";
    }
}

if (isset($_POST["btnSumitRegistro"]))
{
    $insert = "INSERT INTO usuario(full_name, password, email) VALUES ('$nombre','$pass','$email')";

    if (mysqli_query($conexion, $insert))
    {
        echo echo "<script> alert("¡Registro exitoso!") window.location = 'index.html'</script>";
    }else
    {
        echo "Error: ".$sql."<br>".mysql_error($conexion);
    }

?>