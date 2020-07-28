<?php
include "../conecbase1.php";
$cg=$_POST['cargo'];

$co="INSERT INTO cargo(cargo)values('$cg')";
$re=mysqli_query($con,$co);
if($re){
	echo "<script> alert('Se registro correctamente');
	location.href='listaCargo.php';
	</script>";
}else{
	echo "<script> alert('No se registro correctamente');
</script>";}
?>
