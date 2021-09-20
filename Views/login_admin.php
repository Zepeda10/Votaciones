<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../Assets/css/loginAdmin.css">
</head>
<body>
    <form action="../login/loguearseAdmin" method="post">
        <div class="imgcontainer">
            <img src="../Assets/img/avatar_admin.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="dni"><b>DNI</b></label>
            <input type="text" placeholder="Ingrese DNI" name="dni" required>

            <label for="pass"><b>Contraseña</b></label>
            <input type="password" placeholder="Ingrese contraseña" name="pass" required>

            <button type="submit">Iniciar Sesión</button>

        </div>
        <div class="container" style="background-color:#f1f1f1">
            <span class="psw"><a href="../">Regresar</a></span>
        </div>

    </form>
    
</body>
</html>