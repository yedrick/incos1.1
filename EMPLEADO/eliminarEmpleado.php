<?php
include("../conecbase1.php");
$cod=$_GET['cod'];
$es='anulado';
$consulta= "UPDATE  empleado SET estado='$es' WHERE id='$cod'";
$res=mysqli_query($con,$consulta);
if($res){
    echo"<script>window.alert('Registro anulado con exito');
    window.location='listarEmpleado.php';
    </script>";
}else{
    echo"<script>window.alert('No se pudo eliminar');
    </script>";
}
?>