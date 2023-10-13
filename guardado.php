<?php

include "conexion.php";

if(preg_match('/^[ a-zA-ZáéíóúÁÉÍÓÚ@.]+$/',$Correo = $_POST['correo'])){

$contrasena = $_POST['contraseña'];

$cifrado = md5($_POST['correo']."+".$_POST['contraseña']);

$guardar = "INSERT INTO usuarios (Correo,Contrasena,Token) VALUES ('$Correo', '$contrasena','$cifrado')";

$validacion = mysqli_query($conexion,$guardar);

if( $validacion){
    echo" registro guardado";
}

}
else{
    echo "<script>alert('Ingrese datos validos')</script>";
}