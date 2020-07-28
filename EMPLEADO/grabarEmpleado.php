<?php
include("../conecbase1.php");
$ci=$_POST['ci'];
$no=$_POST['nombre'];
$pa=$_POST['paterno'];
$ma=$_POST['materno'];
$di=$_POST['dir'];
$te=$_POST['telf'];
$fe=$_POST['fecha'];
$ge=$_POST['genero'];
$in=$_POST['intereses'];
$ca=$_POST['cargo'];
$es='vigente';
$int="";
foreach ($in as $i => $valor) {
    $int=$int.$in[$i].", ";
}
$consulta="insert into empleado(idcargo, ci, nombre, paterno, materno, direccion, telefono, fechanacimiento, genero, intereses, estado) values 
('$ca','$ci','$no','$pa','$ma','$di','$te','$fe','$ge','$int','$es')";
$r=mysqli_query($con, $consulta);
if ($r) {
    ?>
    <script>
        alert('Se registro correctamente');
        location.href='listarEmpleado.php';
        </script>
        <?php
}
?>
