<?php
require("../conecbase1.php");
$cod = $_GET['cod'];
if (isset($_POST['Modificar'])) {
    $us = $_POST['usuario'];
    $p = $_POST['pasword'];
    $p1= $_POST['pasword1'];
    $p2= $_POST['pasword2'];
    $n = $_POST['nivel'];
    $np=md5($p);
    if ($np == $p1) {
        if($p2 ==null){
            $q = "UPDATE usuarios SET usuario='$us',nivel='$n' WHERE id='$cod'";
            $rs = mysqli_query($con, $q);
            if ($rs) {
                echo "<script>window.alert('Se modifico el registro');
                window.location='listarUser.php';
                </script>";
            }
        }else{
            $np2=md5($p2);
            $cons = "UPDATE usuarios SET usuario='$us',nivel='$n', pasword='$np2' WHERE id='$cod'";
            $rs = mysqli_query($con, $cons);
            if ($rs) {
                echo "<script>window.alert('Se modifico el registro');
                window.location='listarUser.php';
                </script>";
            }
        }
    }else{
        echo "<script>window.alert('Contraseñas diferentes');
        window.location='listarUser.php';
        </script>";
    }
}
?>
<?php
include("../header1.php");
?>
<br><br>

<h2 style="color:teal; font-weight:bold;" align="center">Modificar registro de usuario</h2><br><br>
<div class="container" id="rgu"><br>
    <?php
    $consulta = "SELECT *FROM usuarios where id='$cod' ";
    $res = mysqli_query($con, $consulta);
    while ($fila = mysqli_fetch_array($res)) {
        echo '
    <form method="POST" action=modificarUsuario.php?cod=' . $fila['id'] . '>
    <label >Usuario:</label>
    <input class="form-control input-lg" type="text" name="usuario" id="usuario" value="' . $fila['usuario'] . '">
    <label >Confirme Password:</label>
    <input class="form-control input-lg" type="password" name="pasword" id="pasword" required>
    <label >Nuevo Password:</label>
    <input class="form-control input-lg" type="password" name="pasword2" id="pasword2">
    <label >Nivel:</label>';
    if($fila['nivel']==1){
    echo '<select name="nivel" class="form-control" id="nivel">
        <option value="1">Administrador</option>
        <option value="2">Secretaria</option>
    </select><br>';
    }else{
        echo '<select name="nivel" class="form-control" id="nivel">
        <option value="2">Secretaria</option>
        <option value="1">Administrador</option>
    </select><br>';
    }
    echo '
    <input class="form-control input-lg" type="hidden" name="pasword1" id="pasword1" value="' . $fila['password'] . '">
    <br><br>
    <div class="pull pull-right">
    <input type="submit" name="Modificar" id="Modificar" value="Modificar registro" class="btn btn-success"><br><br>
    </div>
</form>';
    }
    ?>
</div>
<?php
include('../foot.php');
?>