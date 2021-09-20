<?php   
    include ("Layouts/header.php");
?>

    <h1 class="h3 mb-2 text-gray-800">Conteo de votos</h1>
    <button class="btn btn-primary mb-2"> <a href="../votos/inicio" class="text-decoration-none text-white">Regresar</a> </button>
    
    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTablee" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Candidato</th>
                                            <th>Votos</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                    <?php
                                    $count = 0;
                                            foreach ($data as $dato){
                                                $count++;
                                                echo "<tr>";
                                                echo "<td>".$count."</td>";
                                                echo "<td>".$dato['nombre']." ".$dato['ap_paterno']." ".$dato['ap_materno']."</td>";    
                                                echo "<td>".$dato['votos']."</td>";                                                      
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