<?php   
    include ("Layouts/header.php");
?>

    <h1 class="h3 mb-2 text-gray-800">Mesas</h1>

    <button class="btn btn-primary mb-2"> <a href="../mesas/agregar" class="text-decoration-none text-white">Agregar</a> </button>
    
    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTablee" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Mesa</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                            foreach ($data as $dato){
                                                echo "<tr>";
                                                echo "<td>".$dato['id']."</td>";
                                                echo "<td>".$dato['mesa']."</td>";   
                                                echo "<td><a href='../mesas/editar/".$dato['id']."'>Editar</a></td>";
                                                echo "<td><a href='../mesas/eliminar/".$dato['id']."'>Eliminar</a></td>";                                                 
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