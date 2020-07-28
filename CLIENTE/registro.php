<?php
include('../header1.php');
?>
<br><br>
<h3  align="center" ><b>REGISTRO DE CLIENTES</b></h3><br><br>
<div class="container"id="rgc"><br>
	<form method="POST" action="grabarcliente.php">
		<label >R.SOCIAL:</label><br><input type="text" name="razon" placeholder="Ingrese la razon" class="form-control input-lg"><br>
		<label >NIT C.I.:</label><br><input type="text" name="nit" placeholder="Ingrese el nit" class="form-control input-lg"><br>
		<div class="pull pull-right">
		<button id="btn" class="btn btn-info form-control" type="submit" name="REGISTRO">
			<span class="glyphicon glyphicon-plus">Enviar</span></button>
		</div>
	</form>
	</div>
<?php
include ('../foot.php');
?>