<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DNI</title>
    <link rel="stylesheet" href="../Assets/css/dni.css">
</head>
<body>

    <div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active">BIENVENIDO AL SISTEMA DE VOTACIÓN</h2>

        <!-- Icon -->
        <div class="fadeIn first">
        <h2>Ingrese su DNI</h2>
        </div>

        <!-- Login Form -->
        <form method="POST" action="../login/loguearseDni"> 
        <input type="text" id="login" class="fadeIn second" name="dni" placeholder="DNI">
        <input type="submit" class="fadeIn fourth" value="Iniciar votación">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
        <a class="underlineHover" href="../login/cerrar">Cerrar sesión</a>
        </div>

    </div>
    </div>
    
</body>
</html>