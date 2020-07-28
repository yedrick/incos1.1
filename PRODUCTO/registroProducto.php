<?php
include('../header1.php');
?>

    <br><br>
		<h3 align="center">Registro de Producto</h3><br><br>
		<div class="container" >
		<form method="POST" action="grabarProducto.php"><br>
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input id="nombre" class="form-control" type="text" name="">
			</div>
			<div class="form-group">
				<label for="descr">Descripcion</label>
				<input id="descr" class="form-control" type="text" name="">
			</div>
			<div class="form-group">
				<label for="compra">Precio de compra</label>
				<input id="compra" class="form-control" type="text" name="">
			</div>
			<div class="form-group">
				<label for="venta">Precio venta</label>
				<input id="venta" class="form-control" type="text" name="">
			</div>
			<div class="form-group">
				<label for="stock">Stock</label>
				<input id="stock" class="form-control" type="text" name="">
			</div>
			<div class="form-group">
				<label for="fecha">Fecha</label>
				<input id="fecha" class="form-control" type="Date" name="">
			</div>
			<div class="form-group">
				<label for="estado">Estado</label>
				<Select class="form-control" id="estado">
					<option value="1">Activo</option>
					<option value="2">InActivo</option>
				</Select>
			</div>
			<div class="form-group">
				<label for="fecha">Proveedor</label>
				<select id="emp" name="emp" class="form-control">
					<?php
					require("../conecbase1.php");
					$consulta="SELECT * FROM proveedor";
					$r=mysqli_query($con,$consulta);
					while ($reg=mysqli_fetch_array($r)) {
					?>
					<option value="<?php echo $reg['id']; ?>"><?php echo $reg['empresa']?></option>
					<?php
					}
					?>
				</select>
			</div>
			<div class="pull pull-right">
				<button class="btn btn-info form-control" type="submit" name="REGISTRO"><span class="glyphicon glyphicon-plus">Registrar</span></button>
			</div><br><br>
		</form>
		</div>
<?php
include ('../foot.php');
?>