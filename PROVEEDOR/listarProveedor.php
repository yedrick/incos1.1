<?php
include('../header1.php');
?>
        <br><br>
				<h2 align="center"  >LISTADO DE PROVEEDORES</h2><br><br>
			<div class="container">
			<table id="tabla" class="table table-responsive" >
					<thead >
						<tr >
                            <th  align="center"><b>EMPRESA</b></th>
                            <th  align="center"><b>CONTACTO</b></th>
                            <th  align="center"><b>EMAIL</b></th>
                            <th  align="center"><b>TELEFONO</b></th>
                            <th  align="center"><b>DIRECCION</b></th>
                            <th  align="center"><b>LOGO IMAGEN</b></th>
							<th  align="center" colspan="2">Operaciones</th>
						</tr>
					</thead>
					<tbody>
					<?php
					require("../conecbase1.php");
					$q = "SELECT * FROM proveedor";
					$res = mysqli_query($con, $q);
					while ($reg = mysqli_fetch_array($res)) {
						echo "<tr align='left'>";
                        echo "<td>" . $reg[1] . "</td>";
                        echo "<td>" . $reg[2] . "</td>";
                        echo "<td>" . $reg[3] . "</td>";
                        echo "<td>" . $reg[4] . "</td>";
                        echo "<td>" . $reg[5] . "</td>";
                        echo "<td> <img width='50' src='../img/" .$reg[6]."'></td>";
						echo "<td>";
						echo '<a href="eliminarProveedor.php?cod=' . $reg['id'] . '" class="btn btn-danger">';
						echo "<i class='glyphicon glyphicon-trash'> Eliminar</i></a>";
						echo "</td>";
						echo "<td>";
						echo '<a href="modificarProveedor.php?cod=' . $reg['id'] . '" class="btn btn-success">';
						echo "<i class='glyphicon glyphicon-edit'>Modifica</i></a>";
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