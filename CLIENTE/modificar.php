<?php
require("../conecbase1.php");
$cod=$_GET['cod'];
if(isset($_POST['Modificar'])){
    $var0=$_POST['razon'];
    $var1=$_POST['nit'];
    $cm="UPDATE cliente SET razonsocial='$var0',nit_ci='$var1' WHERE id='$cod'";
    $resm=mysqli_query($con,$cm);
    if($resm){
        echo "<script>window.alert('Registro modificado exitosamente');
        window.location='lista.php';
        </script>";
    }
}
?>
<?php
include('../header1.php');
?>
<br><br>
<h2 style="color:teal; font-weight:bold;" align="center">Modificar registro del cliente</h2><br><br>
<div class="container">
<div class="col-lg-3"></div>
<div class="col-lg-6">
<table class="table table-responsive"  >
    <thead >
        <tr >
        <td align="center" "><b>Razon Social</b></td>
        <td align="center" "><b>NIT / C</b></td>
        </tr>
</thead>
<?php
$consulta="SELECT * FROM cliente where id='$cod' ";
$res=mysqli_query($con,$consulta);
while ($fila = mysqli_fetch_array($res)) {
    echo '<tr align="left" style="border: #002929 5px solid;">';
    echo '
    <form method="POST" action=modificar.php?cod='.$fila['id'].'>
    <tr >
    <td ><input class="form-control input-lg" type="text" name="razon" id="razon" value="'.$fila['razonsocial'].'"  style="background:#CCCCFF"></td>
    <td ><input class="form-control input-lg" type="text" name="nit" id="nit" value="'.$fila['nit_ci'].'" style="background:#CCCCFF"></td>
    </tr>
    <td colspan="3"><div align="center"><input type="submit" name="Modificar" id="Modificar" value="Modificar" class="btn btn-primary btn-block"></div></td>
</form>
</tr>';
}
?>
</table>
</div>
</div>
<?php
include ('../foot.php');
?>