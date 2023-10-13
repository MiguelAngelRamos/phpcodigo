<?php


include "conexion.php";

session_start();

$Correo = $_POST['correo'];
$Contrasena = $_POST['contraseña'];
$busqueda = "SELECT*FROM usuarios WHERE Correo = '$Correo' AND Contrasena = '$Contrasena' ";

$Validacion = mysqli_query($conexion,$busqueda);

$guardado = mysqli_fetch_array($Validacion);

if (mysqli_num_rows($Validacion)){
 $_SESSION['user'] = $Correo;

 header("location:index.php");
}

else{
    echo "Datos erroneos. Intentelo nuevamente!";
}