<?php
include("../conecbase1.php");
$cod=$_GET['cod'];
$consulta= "DELETE FROM Producto WHERE id='$cod'";
$res=mysqli_query($con,$consulta);
if($res){
    echo"<script>window.alert('Registro eliminado con exito');
    window.location='listarProducto.php';
    </script>";
}else{
    echo"<script>window.alert('No se pudo eliminar');
    </script>";
}
?>
