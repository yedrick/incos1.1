<?php
include('../header1.php');
?>
<br><br>
<h2 align="center" >LISTADO DE USUARIOS</h2><br><br>
<div class="container">
	<div class="col-lg-2"></div>
	<div class="col-lg-7">
		<table class="table table-responsive" >
			<thead >
				<tr >
					<th align="center"><b>EMPLEADO</b></th>
					<th align="center"><b>USUARIO</b></th>
					<th align="center">NIVEL</th>
					<th align="center" colspan="2">OPERACIONES</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include "../conecbase1.php";
				$q = "SELECT * FROM usuarios WHERE estado='1'";
				$res = mysqli_query($con, $q);
				while ($reg = mysqli_fetch_array($res)) {
					echo "<tr align='left'>";
					$id = $reg['id'];
					$qe = "SELECT * FROM empleado WHERE id='$id'";
					$resem = mysqli_query($con, $qe);
					$regem = mysqli_fetch_array($resem);
					echo "<td>" . $regem['nombre'] . " " . $regem['paterno'] . " " . $regem['materno'] . "</td>";
					echo "<td>" . $reg['usuario'] . "</td>";
					$n = $reg['nivel'];
					if ($n == 1)
						echo "<td>Administrador</td>";
					else
						echo "<td>Secretaria</td>";
					echo "<td>";
					echo '<a href="eliminarUsuario.php?cod=' . $reg['id'] . '" class="btn btn-danger">';
					echo "<i class='glyphicon glyphicon-trash'> Eliminar</i></a>";
					echo "</td>";
					echo "<td>";
					echo '<a href="modificarUsuario.php?cod=' . $reg['id'] . '" class="btn btn-success">';
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
include('../foot.php');
?>