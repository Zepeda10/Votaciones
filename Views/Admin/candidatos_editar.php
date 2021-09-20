<?php   
    include ("Layouts/header2.php");
?>

    <h1 class="h3 mb-2 text-gray-800">Editar</h1>
    
    <div class="card mb-4 mt-4">
        
                            <div class="card-body">
                                <form id="form" action="../../candidatos/update" method="POST" class="mt-5">

                                    <input type="hidden" name="id" value="<?php echo $data['datos']['id']; ?>" required>

                                    <div class="row my-4">
                                        <div class="col">
                                            <input type="text" name="nombre" class="form-control border border-secondary" placeholder="Nombre" value="<?php echo $data['datos']['nombre']; ?>" required>
                                        </div>      
                                    </div>
                                    <div class="row my-4">
                                        <div class="col">
                                            <input type="text" name="ap_paterno" class="form-control border border-secondary" placeholder="Apellido paterno" value="<?php echo $data['datos']['ap_paterno']; ?>" required>
                                        </div>
                                        <div class="col">
                                            <input type="text" name="ap_materno" class="form-control border border-secondary" placeholder="Apellido materno" value="<?php echo $data['datos']['ap_materno']; ?>" required>
                                        </div>                          
                                    </div>
                                    <div class="row my-4">     
                                        <div class="col">
                                            <select name="id_partido" class="form-control border border-secondary" aria-label="Default select example">
                                            <?php
                                                foreach ($data['partidos'] as $dato){
                                                    echo "<option value='".$dato['id']."'>".$dato['partido']."</option>";
                                                }
                                            ?>
                                            </select>
                                        </div>    
                                        
                                        <div class="col">
                                        <input type="file" id="foto" name="foto">
                                        </div>    
                                    </div>
                                  
                                    <button type="submit" class="btn btn-danger d-inline">Aceptar</button>
                                    <button class="btn btn-secondary mx-3 d-inline"><a href="../../candidatos/inicio" class="text-decoration-none text-white">Regresar</a></button>
                                </form>
                            </div>
                        </div>

                   


<?php   
    include ("Layouts/footer2.php");
?>       