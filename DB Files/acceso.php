<?php
include("credentials.php");

$nombre = $_POST["user"];
$pass = $_POST["contrasena"];


//
if (isset($_POST["btnSumit"]))
{
    $query = mysqli_query($conexion, "SELECT * FROM usuario WHERE full_name = '$nombre' and password = '$pass'");
    $ok = mysqli_num_rows($query);
    if ($ok == 1)
    { 
        include("Dashboard.html");
        header("location:/Dashboard.html");
    }else
    {
        include("errorLogin.html");
        header("location:/errorLogin.html");

    }
}

if (isset($_POST["btnSumitRegistro"]))
{
    $email = $_POST["correo"];

    $insert = "INSERT INTO usuario(full_name, password, email) VALUES ('$nombre','$pass','$email')";

    if (mysqli_query($conexion, $insert))
    {
        include("SuccessRegistro.html");
        header("location:/SuccessRegistro.html");

    }else
    {
        echo "Error: ".$sql."<br>".mysql_error($conexion);
    }
}
?>
