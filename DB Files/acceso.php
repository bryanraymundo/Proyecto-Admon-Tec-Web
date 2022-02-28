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
        echo "<div style='left: 34%;
        top: 8%;
        position: absolute;
        background-color: brown;
        color: aliceblue;
        text-align: center;
        height: 75px;
        width: 500px;
        padding-top: 5px;
        padding-bottom: 13px;'>
             <h1>Error de credenciales</h1>        
              </div>";
    }
}

if (isset($_POST["btnSumitRegistro"]))
{
    $email = $_POST["correo"];

    $insert = "INSERT INTO usuario(full_name, password, email) VALUES ('$nombre','$pass','$email')";

    if (mysqli_query($conexion, $insert))
    {
        echo "Registro Exitoso";
    }else
    {
        echo "Error: ".$sql."<br>".mysql_error($conexion);
    }
}
?>
