<?php
include('../header1.php');
?>
        <br><br>
		<h2 align="center" style="color:teal; font-weight:bold;">LISTADO DE PRODUCTOS</h2><br><br>
			<div class="container">
			<div class="col-lg-12">
			<table class="table table-responsive" >
					<thead >
						<tr >
							<th align="center"><b>Nombre</b></th>
							<th  align="center">Descripcion</th>
							<th align="center"><b>Venta</b></th>
							<th  align="center">Venta</th>
							<th align="center"><b>Estock</b></th>
							<th  align="center">Fecha</th>
							<th align="center"><b>Estado</b></th>
							<th align="center"><b>Proveedor</b></th>
							<th align="center" colspan="2"><b>Accion</b></th>
						</tr>
					</thead>
					<tbody>
					<?php
					include "../conecbase1.php";
					$q = "SELECT * FROM producto";
					$res = mysqli_query($con, $q);
					while ($reg = mysqli_fetch_array($res)) {
						echo "<tr align='left'>";
						echo "<td>" . $reg[1] . "</td>";
						echo "<td>" . $reg[2] . "</td>";
						echo "<td>" . $reg[3] . "</td>";
						echo "<td>" . $reg[4] . "</td>";
						echo "<td>" . $reg[5] . "</td>";
						echo "<td>" . $reg[6] . "</td>";
						echo "<td>" . $reg[7] . "</td>";
						echo "<td>" . $reg[8] . "</td>";
						echo "<td>";
						echo '<a href="eliminarProducto.php?cod=' . $reg['id'] . '" class="btn btn-danger">';
						echo "<i class='glyphicon glyphicon-trash'> Eliminar</i></a>";
						echo "</td>";
						echo "<td>";
						echo '<a href="modificarProducto.php?cod=' . $reg['id'] . '" class="btn btn-success">';
						echo "<i class='glyphicon glyphicon-edit'> Modificar</i></a>";
						echo "</td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
			</div>
			</div>
<?php
include ('../foot.php');
?>