<?php
require("conecbase1.php");
$usr=$_POST['user'];
$pas=$_POST['pasw'];
$pas=$pas;
$q="SELECT * FROM usuarios where(usuario='$usr' AND password='$pas')";
$rs=mysqli_query($con,$q);
if(mysqli_num_rows($rs)!=0){
session_start();
$_SESSION['ingreso']='si';
if ($r=mysqli_fetch_array($rs)) {
    $_SESSION['nombre']=$r['usuario'];
    $_SESSION['id_empleado']=$r['id'];
    $_SESSION['nivel']=$r['nivel'];
}
header("location:admin.php");
}else {
    header("location:index.php?error=1");
}
?>
