<?php
include('../header1.php');
?>

    <br><br>
		<h3 align="center" >Registro de cargo</h3><br><br>
		<div class="container" id="rgc">
		<form method="POST" action="grabarcargo.php"><br>
		<label >CARGO:</label><br><br>
		<input class="form-control input-lg" type="text" name="cargo" placeholder="Ingrese el cargo"><br>
		<div class="pull pull-right">
		<button class="btn btn-info form-control" type="submit" name="REGISTRO"><span class="glyphicon glyphicon-plus">Registrar</span></button>
		</div><br><br>
		</form>
		</div>
<?php
include ('../foot.php');
?>