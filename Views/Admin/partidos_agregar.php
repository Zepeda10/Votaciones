<?php   
    include ("Layouts/header.php");
?>

    <h1 class="h3 mb-2 text-gray-800">Agregar</h1>
    
    <div class="card mb-4 mt-4">
        
                            <div class="card-body">
                                <form id="form" action="../partidos/add" method="POST" enctype="multipart/form-data" class="mt-5">
                                    <div class="row my-4">
                                        <div class="col">
                                            <input type="text" name="partido" class="form-control border border-secondary" placeholder="Partido" required>
                                        </div>
                                        <div class="col">
                                            <input type="file" id="logo" name="logo">
                                        </div>
                                    </div>
                                   
                                    <button type="submit" class="btn btn-danger d-inline">Aceptar</button>
                                    <button class="btn btn-secondary mx-3 d-inline"><a href="../partidos/inicio" class="text-decoration-none text-white">Regresar</a></button>
                                </form>
                            </div>
                        </div>

                   


<?php   
    include ("Layouts/footer.php");
?>       