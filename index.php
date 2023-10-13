<?php

session_start();

$usuario = $_SESSION['user'];


if(isset($usuario)){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1><?php echo "Bienvenido $usuario";?></h1>

    <a href="salir.php">Cerrar sesion</a>
</body>
</html>
<?php
}
else{
    header("location:login.php");
}
?>