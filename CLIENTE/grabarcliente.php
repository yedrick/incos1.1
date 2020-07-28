<?php
include "../conecbase1.php";
$rs=$_POST['razon'];
$ni=$_POST['nit'];
$co="INSERT INTO cliente(razonsocial,nit_ci)values('$rs','$ni')";
$re=mysqli_query($con,$co);
if($re){
	echo "<script> alert('Se registro correctamente');
	location.href='lista.php';
	</script>";
}else{
	echo "<script> alert('No se registro correctamente');
</script>";}
?>