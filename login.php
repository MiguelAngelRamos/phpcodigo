<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="cont">
        <form action="validacion.php" method="post">
            <h1> Ingresa tus datos para ingresar</h1>
            <br><br>
            <label for="">Correo</label>
            <br>
            <input type="text" placeholder="Ingrese su correo" name ="correo" >
            <br><br>
            <label for="">Contraseña</label>
            <br>
            <input type="password" placeholder="Ingrese su contraseña" name ="contraseña">
            <br><br>
            <button>Ingresar</button>


        </form>
    </div>
</body>
</html>