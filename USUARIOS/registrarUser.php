<?php
include('../header1.php');
?>

<br><br>
<h3  align="center"><b>REGISTRO DE USUARIOS</b></h3><br><br>
<form method="POST" id="formulario" name="formulario" action="grabarUsuario.php">
    <div class="container" id="rgu"><br>
    <label >Empleado</label>
    <select id="emp" name="emp" class="form-control">
        <?php
        require("../conecbase1.php");
        $consulta="SELECT * FROM empleado";
        $r=mysqli_query($con,$consulta);
        while ($reg=mysqli_fetch_array($r)) {
        ?>
        <option value="<?php echo $reg['id_empleado']; ?>"><?php echo $reg['nombre']." ".$reg['paterno']." ".$reg['materno'];?></option>
        <?php
        }
        ?>
    </select><br>
    <label >Usuario:</label><br><input type="text" name="user" id="user"class="form-control input-xs"><br>
    <label >Contraseña:</label><br><input type="password" name="cont1" id="cont1" class="form-control input-xs"><br>
    <label >Repetir contraseña:</label><br><input type="password" name="cont2" id="cont2" class="form-control input-xs"><br>
    <label >Nivel:</label><br>
    <select name="nivel" class="form-control" id="nivel">
        <option value="1">Administrador</option>
        <option value="2">Secretaria</option>
    </select><br>
    <label >Estado</label>
    <select name="estado" class="form-control" id="estado">
        <option value="1">Activo</option>
        <option value="2">Inactivo</option>
    </select><br>
    <div class="pull pull-right">
        <button id="btn" class="btn btn-info btn-lg form-control" type="submit" name="registrarUser" id="registrarUser"><span class="glyphicon glyphicon-user"> Registrar</span></button>
        </div>
    </div>
</form>
<?php
include('../foot.php');
?>
