<?php
include('../header.php');
?>
<?php
require("../conecbase1.php");
$cod=$_GET['cod'];
$q="UPDATE usuarios SET estado='2' WHERE id='$cod'";
$res=mysqli_query($con,$q);
if ($res) {
    echo "
    <script>
    window.alert('Usuario eliminado');
    window.location='listarUser.php';
    </script>
    ";
}else{
    echo "
    <script>
    window.alert('Usuario no eliminado');
    window.location='listarUser.php';
    </script>
    ";
}
?>
<?php
include('../foot.php');
?>