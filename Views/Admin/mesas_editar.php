<?php   
    include ("Layouts/header2.php");
?>

    <h1 class="h3 mb-2 text-gray-800">Editar</h1>
    
    <div class="card mb-4 mt-4">
        
                            <div class="card-body">
                                <form id="form" action="../../mesas/update" method="POST" class="mt-5">

                                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>" required>

                                    <div class="row my-4">
                                        <div class="col">
                                            <input type="text" name="mesa" class="form-control border border-secondary" placeholder="Mesa" value="<?php echo $data['mesa']; ?>" required>
                                        </div>
                                             
                                    </div>
                                  
                                    <button type="submit" class="btn btn-danger d-inline">Aceptar</button>
                                    <button class="btn btn-secondary mx-3 d-inline"><a href="../../mesas/inicio" class="text-decoration-none text-white">Regresar</a></button>
                                </form>
                            </div>
                        </div>

                   


<?php   
    include ("Layouts/footer2.php");
?>       