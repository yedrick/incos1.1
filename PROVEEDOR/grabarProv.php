<?php
include "../conecbase1.php";
$em=$_POST['empresa'];
$ct=$_POST['contacto'];
$ma=$_POST['email'];
$te=$_POST['telefono'];
$di=$_POST['dir'];
$a=$_FILES['img']['name'];
$b=$_FILES['img']['tmp_name'];
$co="INSERT INTO proveedor(empresa,contacto,mail,telefono,direccion,logo)values('$em','$ct','$ma','$te','$di','$a')";
$re=mysqli_query($con,$co);
if($re){
    @copy($b, "../img/".$a);
    ?>
	<script> alert('Se registro correctamente');
	location.href='listarProveedor.php';
	</script>"
<?php
}
?>

