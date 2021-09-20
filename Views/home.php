<?php 
error_reporting(0);

    session_start();

    if(!isset($_SESSION['id_usuario'])){
        header("Location: http://localhost/Votaciones/");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="../login/home">Bienvenido (a), <?php  echo $_SESSION['usuario'] ;?></a>
        <a class="navbar-brand" href="../login/cerrar">Cerrar Sesión</a>
    </nav>

    <div class="container">
        <h2 class="my-4 text-center">Seleccione el candidato por el que desea votar</h2>

        <div class="mt-5 row d-flex justify-content-center">
            <table class="table" style="width: 750px;">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Candidato</th>
                        <th scope="col">Partido</th>
                        <th scope="col">Votar</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php
                        $count = 0;
                        foreach ($data as $dato){
                            $count++;
                            echo '<th class="align-middle" scope="row">'.$count.'</th>';
                            echo "<td class='align-middle'>";
                                echo $dato['nombre']." ".$dato['ap_paterno']." ".$dato['ap_materno'];
                                echo '<img src="../imagenes_subidas/'.$dato['foto'].'" class="rounded-circle ml-4" style="width:60px; height: 60px;">';
                            echo "</td>";
                            echo "<td class='align-middle'>".$dato['partido']."</td>";   
                            echo "<td class='align-middle'><a href='../login/votar/".$dato['id']."'>Votar</a></td>";                                                 
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>





    </div>
    
</body>
</html>