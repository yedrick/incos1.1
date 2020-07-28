<?php
include('../header1.php');
?>
        <br><br><br>

     <br><br>
     <h3  align="center" ><b>REGISTRO DE EMPLEADOS</b></h3><br><br>
    <form method="POST" action="grabarEmpleado.php" name="formulario" id="formulario">
    <div class="container" id="rge"><br>
        <label >CARGO</label>
                <select name="cargo" id="cargo" class="form-control">
                      <?php
                      require("../conecbase1.php");
                      $consulta="SELECT  *FROM CARGO";
                      $res=mysqli_query($con,$consulta);
                      while ($reg=mysqli_fetch_array($res)) {
                          ?>
                          <option value="<?php echo $reg[0]?>"><?php echo $reg['cargo'];?></option>
                          <?php
                      }
                      ?>
                </select><br>
        <label >CARNET:</label><br><input type="text" name="ci" class="form-control input-xs"><br>
        <label >NOMBRES:</label><br><input type="text" name="nombre" class="form-control input-xs" ><br>
        <label >PATERNO:</label><br><input type="text" name="paterno" class="form-control input-xs" ><br>
        <label >MATERNO:</label><br><input type="text" name="materno" class="form-control input-xs"><br>
        <label >DIRECCION:</label><br><input type="text" name="dir" class="form-control input-xs"><br>
        <label >TELEFONO:</label><br><input type="number"  name="telf" class="form-control input-xs"><br>
        <label >FECHA DE NAC:</label><br><input type="date" name="fecha" class="form-control input-xs"><br>
        <label >GENERO:</label><br>
        <label><input type="radio" name="genero" id="genero" value="F" class="form-control" > Femenino </label>
        <label><input type="radio" name="genero" id="genero" value="M" class="form-control"> Masculino <br></label><br>
        <label >INTERESES:</label><br>
        <label><input type="checkbox" name="intereses[]" id="intereses[]" value="Estudia" class="form-control"> Estudia </label>
        <label><input type="checkbox" name="intereses[]" id="intereses[]" value="Trabaja" class="form-control"> Trabaja </label>
        <label><input type="checkbox" name="intereses[]" id="intereses[]" name="Deportes" class="form-control"> Deportes </label><br><br>
        <div class="pull pull-right">
        <button id="btn" class="btn btn-info form-control" type="submit" name="registroemp" id="registroemp"><span class="glyphicon glyphicon-plus">Registrar</span></button>
        </div>
        </div>
    </form>
<?php
include ('../foot.php');
?>
