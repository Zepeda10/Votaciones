<?php   
    include ("Layouts/header.php");
?>

    <h1 class="h3 mb-2 text-gray-800">Usuarios</h1>

    <button class="btn btn-primary mb-2"> <a href="../usuarios/agregar" class="text-decoration-none text-white">Agregar</a> </button>
    
    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTablee" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>DNI</th>
                                            <th>Nombre</th>
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Email</th>
                                            <th>Teléfono</th>
                                            <th>Pass</th>
                                            <th>Mesa</th>
                                            <th>Rol</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                            foreach ($data as $dato){
                                                echo "<tr>";
                                                echo "<td>".$dato['id']."</td>";
                                                echo "<td>".$dato['dni']."</td>";  
                                                echo "<td>".$dato['nombre']."</td>"; 
                                                echo "<td>".$dato['ap_paterno']."</td>"; 
                                                echo "<td>".$dato['ap_materno']."</td>"; 
                                                echo "<td>".$dato['email']."</td>"; 
                                                echo "<td>".$dato['telefono']."</td>";  
                                                echo "<td>".$dato['pass']."</td>"; 
                                                echo "<td>".$dato['id_mesa']."</td>"; 
                                                echo "<td>".$dato['id_rol']."</td>";   
                                                echo "<td><a href='../usuarios/editar/".$dato['id']."'>Editar</a></td>";
                                                echo "<td><a href='../usuarios/eliminar/".$dato['id']."'>Eliminar</a></td>";                                             
                                                echo "</tr>";
                                            }
                                        ?>                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<?php   
    include ("Layouts/footer.php");
?>       

<!-- Page level plugins -->
<script src="../Assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../Assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="../Assets/js/demo/datatables-demo.js"></script>

<script>
    $(document).ready(function() {
        $('#dataTablee').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bInfo": false,
            "bAutoWidth": false });
        });

</script>