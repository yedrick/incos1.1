<?php
include('../header1.php');
?>
        <br><br>
                <h2 align="center" >Lista de empleados</h2>
                <br><br>
			<div class="container">
			<table id="tabla" class="table table-responsive" >
					<thead >
                        <tr >
                            <th  align="center"><b>Cargo</b></th>
                            <th  align="center"><b>Nombre</b></th>
                            <th  align="center"><b>Paterno</b></th>
                            <th  align="center"><b>Materno</b></th>
                            <th  align="center"><b>C.I.</b></th>
                            <th  align="center"><b>Direccion</b></th>
                            <th  align="center"><b>Telefono</b></th>
                            <th  align="center"><b>F. Nac</b></th>
                            <th  align="center"><b>Genero</b></th>
							<th  align="center"><b>Intereses</b></th>
							<th  align="center"><b>Estado</b></th>
							<th  align="center" colspan="2">Operaciones</th>
						</tr>
					</thead>
					<tbody>
					<?php
					require("../conecbase1.php");
					$q = "SELECT  e.*, c.cargo FROM empleado e inner join cargo c on e.id=c.id";
					$res = mysqli_query($con, $q);
					while ($reg = mysqli_fetch_array($res)) {
						echo "<tr align='left'>";
                        echo "<td>" . $reg['cargo'] . "</td>";
                        echo "<td>" . $reg['nombre'] . "</td>";
                        echo "<td>" . $reg['paterno'] . "</td>";
                        echo "<td>" . $reg['materno'] . "</td>";
                        echo "<td>" . $reg['ci'] . "</td>";
                        echo "<td>" . $reg['direccion'] . "</td>";
                        echo "<td>" . $reg['telefono'] . "</td>";
                        echo "<td>" . $reg['fechanacimiento'] . "</td>";
                        echo "<td>" . $reg['genero'] . "</td>";
						echo "<td>" . $reg['intereses'] . "</td>";
						echo "<td>" . $reg['estado'] . "</td>";
						echo "<td>";
						echo '<a href="eliminarEmpleado.php?cod=' . $reg['id'] . '" class="btn btn-danger">';
						echo "<i class='glyphicon glyphicon-trash'>Eliminar</i></a>";
						echo "</td>";
						echo "<td>";
						echo '<a href="modificarEmpleado.php?cod=' . $reg['id'] . '" class="btn btn-success">';
						echo "<i class='glyphicon glyphicon-edit'>Actulizar</i></a>";
						echo "</td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
            </div>
<?php
include ('../foot.php');
?>
