<?php
include "../conecbase1.php";
$em = $_POST['emp'];
$us = $_POST['user'];
$p1 = $_POST['cont1'];
$p2 = $_POST['cont2'];
$ni = $_POST['nivel'];
$es = $_POST['estado'];
if ($p1 == $p2) {
    $con1 = "SELECT * FROM usuarios WHERE (usuario='$us')";
    $res1 = mysqli_query($con, $con1);
    if (mysqli_num_rows($res1) != 0) {
        echo "
        <script>
        window.alert('Usuario existente');
        window.location='listarUser.php';
        </script>";
    } else {
        $pa1 = md5($p1);
        $consulta = "INSERT INTO usuarios(id_empleado, usuario, pasword, nivel, estado) values('$em', '$us', '$pa1', '$ni', '$es')";
        $r = mysqli_query($con, $consulta);
        if ($r) {
?>
            <script>
                window.alert('Registro realizado');
                window.location = 'listarUser.php';
            </script>
<?php
        }
    }
} else {
    echo "<script>
    alert('Passwords diferentes');
</script>";
}
?>