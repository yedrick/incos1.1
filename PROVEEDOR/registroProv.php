<?php
include('../header1.php');
?>

<br><br>
<h3  align="center" ><b>REGISTRO DE PROVEEDORES</b></h3><br>
    <form method="POST" action="grabarProv.php" name="formulario" enctype="multipart/form-data"><br>
        <div class="container" id="rgp"><br>
        <label >EMPRESA:</label><br><input type="text" name="empresa" placeholder="Ingrese la empresa" class="form-control input-lg"><br>
        <label >CONTACTO:</label><br><input type="text" name="contacto" placeholder="Ingrese contacto" class="form-control input-lg"><br>
        <label >EMAIL:</label><br><input type="email" name="email" placeholder="Ingrese el email" class="form-control input-lg"><br>
        <label >TELEFONO:</label><br><input type="number" name="telefono" placeholder="Ingrese el telefono" class="form-control input-lg"><br>
        <label >DIRECCION:</label><br><input type="text" name="dir" placeholder="Ingrese la direccion" class="form-control input-lg"><br>
        <label >LOGO:</label><input type="file" value="examinar" name="img" class="form-control input-lg"><br>
        <div class="pull pull-right">
        <button id="btn" class="btn btn-info form-control" type="submit" name="registrarprov" id="registrarprov"><span class="glyphicon glyphicon-plus">Enviar</span></button>
        </div>
        </div>
    </form>
    <?php
include ('../foot.php');
?>



