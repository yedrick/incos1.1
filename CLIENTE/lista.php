<?php
include('../header1.php');
?>
<br><br>
<h2 align="center" style="color:teal; font-weight:bold;">LISTADO DE CLIENTES</h2><br><br>
    <div class="container">
    <div class="col-lg-2"></div>
<div class="col-lg-8">
            <table class="table table-responsive" >
                    <thead>
                        <tr>
                            <th  align="center"><b>Razon social</b></th>
                            <th  align="center" ><b>Nit / CI</b></th>
                            <th  align="center" colspan="2">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    include "../conecbase1.php";
                    $q = "SELECT * FROM CLIENTE";
                    $res = mysqli_query($con, $q);
                    while ($reg = mysqli_fetch_array($res)) {
                        echo "<tr align='left'>";
                        echo "<td>" . $reg[1] . "</td>";
                        echo "<td>" . $reg[2] . "</td>";
                        echo "<td>";
                        echo '<a href="eliminar.php?cod=' . $reg['id'] . '" class="btn btn-danger">';
                        echo "<i class='glyphicon glyphicon-trash'> Eliminar</i></a>";
                        echo "</td>";
                        echo "<td>";
                        echo '<a href="modificar.php?cod=' . $reg['id'] . '" class="btn btn-success">';
                        echo "<i class='glyphicon glyphicon-edit'> Modificar</i></a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
            </table>
    </div>
    </div>
<?php
include ('../foot.php');
?>
