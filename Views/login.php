<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Assets/css/login.css">
</head>
<body>
    <form action="login/loguearse" method="post">
        <div class="imgcontainer">
            <img src="Assets/img/avatar.PNG" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="id_mesa"><b>No. de mesa</b></label>
            <input type="text" placeholder="Ingrese No. de mesa" name="id_mesa" required>

            <label for="pass"><b>Contraseña</b></label>
            <input type="password" placeholder="Ingrese contraseña" name="pass" required>

            <button type="submit">Iniciar Sesión</button>

        </div>
        <div class="container" style="background-color:#f1f1f1">
            <span class="psw">Ingresar como <a href="login/admin">administrador</a></span>
        </div>

    </form>
    
</body>
</html>