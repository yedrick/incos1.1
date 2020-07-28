<?php
include('../header1.php');
?>
        <br><br>
        <h2 align="center" style="color:teal; font-weight:bold;">LISTADO DE CARGOS</h2><br><br>
            <div class="container">
            <div class="col-lg-3"></div>
<div class="col-lg-6">
            <table class="table table-responsive" >
                    <thead >
                        <tr >
                            <th align="center"><b>CARGO</b></th>
                            <th  align="center" colspan="2">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    include "../conecbase1.php";
                    $q = "SELECT * FROM cargo";
                    $res = mysqli_query($con, $q);
                    while ($reg = mysqli_fetch_array($res)) {
                        echo "<tr align='left'>";
                        echo "<td>" . $reg['cargo'] . "</td>";
                        echo "<td>";
                        echo '<a href="eliminarCargo.php?cod=' . $reg['id'] . '" class="btn btn-danger">';
                        echo "<i class='glyphicon glyphicon-trash'> Eliminar</i></a>";
                        echo "</td>";
                        echo "<td>";
                        echo '<a href="modificarCargo.php?cod=' . $reg['id'] . '" class="btn btn-success">';
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
