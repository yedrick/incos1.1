<?php
require("../conecbase1.php");
$cod=$_GET['cod'];
if(isset($_POST['Modificar'])){
    $em=$_POST['empresa'];
    $cnt=$_POST['contacto'];
    $ma=$_POST['mail'];
    $te=$_POST['telefono'];
    $di=$_POST['direccion'];
    $log=$_FILES['logo']['name'];
    $log1=$_FILES['logo']['tmp_name'];
    $q="UPDATE proveedor SET empresa='$em',contacto='$cnt',mail='$ma',telefono='$te',direccion='$di',logo='$log' WHERE id='$cod'";
    $rs=mysqli_query($con,$q);
    if($rs){
        @copy($log1, "../img/".$log);
        echo "<script>window.alert('SE MODIFICO EL REGISTRO');
        window.location='listarProveedor.php';
        </script>";
    }
}
?>
<?php
include('../header1.php');
?>
<br><br>
<h2 >Modificar registro de proveedor</h2><br><br>
<div class="container">
<table class="table table-responsive" >
    <thead >
        <tr >
        <td align="center" ><b>Empresa</b></td>
        <td align="center" ><b>Contacto</b></td>
        <td align="center" ><b>Email</b></td>
        <td align="center" ><b>Telefono</b></td>
        <td align="center" ><b>Direccion</b></td>
        <td align="center"  colspan="2"><b>Logo</b></td>
        </tr>
</thead>
</tbody>
<?php
$consulta="SELECT * FROM proveedor where id='$cod' ";
$res=mysqli_query($con,$consulta);
while ($fila = mysqli_fetch_array($res)) {
    echo '<tr align="left" >';
    echo '
    <form method="POST" enctype="multipart/form-data" action=modificarProveedor.php?cod='.$fila['id'].'>
    <tr style="border: #002929 3px solid;">
    <td style="border: #002929 3px solid;"><input class="form-control input-lg" type="text" name="empresa" id="empresa" value="'.$fila['empresa'].'"></td>
    <td style="border: #002929 3px solid;"><input class="form-control input-lg" type="text" name="contacto" id="contacto" value="'.$fila['contacto'].'"></td>
    <td style="border: #002929 3px solid;"><input class="form-control input-lg" type="text" name="mail" id="mail" value="'.$fila['mail'].'"></td>
    <td style="border: #002929 3px solid;"><input class="form-control input-lg" type="text" name="telefono" id="telefono" value="'.$fila['telefono'].'"></td>
    <td style="border: #002929 3px solid;"><input class="form-control input-lg" type="text" name="direccion" id="direccion" value="'.$fila['direccion'].'"></td>
    <td> <img width="50" src="../img/' .$fila['logo'].'"></td>
    <td><input class="form-control input-lg" type="file" name="logo" id="logo" "></td>
    </tr>
    <td style="border: #002929 5px solid;" colspan="7"><div align="center"><input type="submit" name="Modificar" id="Modificar" value="Modificar" class="btn btn-success btn-block"></div></td>
</form></tr>';
}
?>
</tbody>
</table></div>
<?php
include ('../foot.php');
?>
