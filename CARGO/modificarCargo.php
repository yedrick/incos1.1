<?php
require("../conecbase1.php");
$cod=$_GET['cod'];
if(isset($_POST['Modificar'])){
    $car0=$_POST['cargo'];
    $cm="UPDATE cargo SET cargo='$car0' WHERE id='$cod'";
    $resm=mysqli_query($con,$cm);
    if($resm){
        echo "<script>window.alert('Registro modificado exitosamente');
        window.location='listaCargo.php';
        </script>";
    }
}
?>
<?php
include('../header1.php');
?>
<br><br>
<h2 style="color:teal; font-weight:bold;" align="center">Modificar registro</h2><br><br>
<div class="container">
<div class="col-lg-3"></div>
<div class="col-lg-6">
<table class="table table-responsive" >
    <thead >
        <tr >
        <td align="center" ><b>Cargo</b></td>
        </tr>
</thead>
<tbody>
<?php
$consulta="SELECT * FROM cargo where id='$cod' ";
$res=mysqli_query($con,$consulta);
while ($fila = mysqli_fetch_array($res)) {
    echo '<tr align="left" > ';
    echo '
    <form method="POST" action=modificarCargo.php?cod='.$fila['id'].'>
    <tr >
    <td >
    <input class="form-control input-lg" type="text" name="cargo" id="cargo" value="'.$fila['cargo'].'"></td>
    </tr>
    <td colspan="3"><div align="center"><input type="submit" name="Modificar" id="Modificar" value="Modificar" class="btn btn-primary"></div></td>
</form>
</tr>';
}
?>
</tbody>
</table>
</div>
        </div>
<?php
include ('../foot.php');
?>