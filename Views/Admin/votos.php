<?php   
    include ("Layouts/header.php");
?>

    <h1 class="h3 mb-2 text-gray-800">Votos</h1>
    <button class="btn btn-primary mb-2"> <a href="../votos/conteo" class="text-decoration-none text-white">Contar votos</a> </button>
    
    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTablee" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Candidato</th>
                                            <th>Fecha</th>
                                            <th>Votante</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                            foreach ($data as $dato){
                                                echo "<tr>";
                                                echo "<td>".$dato['id']."</td>";
                                                echo "<td>".$dato['nombre']." ".$dato['ap_paterno']." ".$dato['ap_materno']."</td>";    
                                                echo "<td>".$dato['fecha']."</td>";    
                                                echo "<td>".$dato['ide']."</td>";                                                   
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