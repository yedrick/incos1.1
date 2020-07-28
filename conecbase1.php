<?php
$con=mysqli_connect("localhost","root","","juvenil");
if($con){
	//echo"<div class='alert alert-success'>";
	//echo "Se realizo la conexion";
	//echo "</div>";
}else{
	echo"<div class='alert alert-danger'>";
	echo "La conexion fue fallida";
	echo "</div>";
}
?>