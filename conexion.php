<?php

$localhost = "localhost";
$user = "root";
$bd = "Script";

$conexion = mysqli_connect($localhost,$user,'',$bd);

if($conexion){
    echo " Conexion establecida";
}
