<?php
require("../conecbase1.php");
$cod=$_GET['cod'];
if(isset($_POST['Modificar'])){
    $car0=$_POST['cargo'];
    $cm="UPDATE producto SET cargo='$car0' WHERE id='$cod'";
    $resm=mysqli_query($con,$cm);
    if($resm){
        echo "<script>window.alert('Registro modificado exitosamente');
        window.location='listarProducto.php';
        </script>";
    }
}
?>
<?php
include('../header1.php');
?>
<br><br>
<h2 style="color:teal; font-weight:bold;" align="center">Modificar registro</h2><br><br>
<div class="container">
<div class="col-lg-3"></div>
<div class="col-lg-6">

<?php
$consulta="SELECT * FROM producto where id='$cod' ";
$res=mysqli_query($con,$consulta);
while ($fila = mysqli_fetch_array($res)) {
    
    echo '
    <form method="POST" action=modificarProducto.php?cod='.$fila['id'].'>
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input id="nombre" class="form-control" type="text" name="nombre" value="'.$fila['nombreproducto'].'">
			</div>
			<div class="form-group">
				<label for="descr">Descripcion</label>
				<input id="descr" class="form-control" type="text" name="descr" value="'.$fila['descripcion'].'">
			</div>
			<div class="form-group">
				<label for="compra">Precio de compra</label>
				<input id="compra" class="form-control" type="text" name="compra" value="'.$fila['costocompra'].'">
			</div>
			<div class="form-group">
				<label for="venta">Precio venta</label>
				<input id="venta" class="form-control" type="text" name="venta" value="'.$fila['costoventa'].'">
			</div>
			<div class="form-group">
				<label for="stock">Stock</label>
				<input id="stock" class="form-control" type="text" name="stock" value="'.$fila['stock'].'">
			</div>
			<div class="form-group">
				<label for="fecha">Fecha</label>
				<input id="fecha" class="form-control" type="Date" name="fecha" value="'.$fila['fecha'].'">
			</div>
			<div class="form-group">
				<label for="estado">Estado</label>
				<Select class="form-control" id="estado">
					<option value="1">Activo</option>
					<option value="2">InActivo</option>
				</Select>
			</div>
			<div class="form-group">
				<label for="proveedor">Proveedor</label>
				<input id="proveedor" class="form-control" type="text" name="proveedor" value="'.$fila['proveedor_id_proveedor'].'" >
			</div>
			<div class="pull pull-right">
				<button class="btn btn-info form-control" type="submit" name="REGISTRO"><span class="glyphicon glyphicon-plus">Registrar</span></button>
			</div><br><br>
    </form>';
}
?>
</div>
        </div>
<?php
include ('../foot.php');
?>