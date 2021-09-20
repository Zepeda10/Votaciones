<?php   
    include ("Layouts/header.php");
?>

    <h1 class="h3 mb-2 text-gray-800">Roles</h1>
    
    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTablee" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Rol</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                            foreach ($data as $dato){
                                                echo "<tr>";
                                                echo "<td>".$dato['id']."</td>";
                                                echo "<td>".$dato['rol']."</td>";                                                   
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