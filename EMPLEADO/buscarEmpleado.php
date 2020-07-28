<?php
include('../header1.php');
?>
<br><br>
	<h2 align="center" >BUSQUEDA DE EMPLEADOS</h2><br><br>
       <form role="form" method="get" id="busqueda">
           <div class="container">
           <div class="form-group" id="busqueda">
               <label>CARNET</label>
               <input class="form-control" type="text" name="ci" id="ci">
           </div>
           <div class="form-group">
               <button class="btn btn-primary" type="submit" name="busca" id="busca"><span class="glyphicon glyphicon-search"></span>Buscar</button>
           </div>
           </div>
               <div class="container">
               <?php
           if(isset($_GET['busca'])){
               $ci=$_GET['ci'];
               include("../conecbase1.php");
               $q=" SELECT  e.*, c.cargo FROM empleado e inner join cargo c on e.id=c.id where ci like '$ci%' order by e.nombre";
               $res=mysqli_query($con,$q);
               ?>
			<table  class="table table-bordered">
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
							<th  align="center" colspan="2">Operaciones</th>
						</tr>
					</thead>
					<tbody>
                    <?php
                       while ($r=mysqli_fetch_array($res)) {
                   
                   echo '<tr valign="middle">';
                   echo '<td> '.$r['cargo'].' </td>';
                   echo '<td> '. $r['nombre'].'</td>';
                   echo '<td> '. $r['paterno'].'</td>';
                   echo '<td> '. $r['materno'].' </td>';
                   echo '<td> '. $r['ci'].' </td>';
                   echo '<td> '. $r['direccion'].'</td>';
                   echo '<td> '. $r['telefono'].' </td>';
                   echo '<td> '. $r['fechanacimiento'].' </td>';
                   echo '<td> '. $r['genero'].' </td>';
                   echo '<td> '. $r['intereses'].' </td>';
                   echo '<td><a href=" eliminarEmpleado.php?cod='.$r['id'].'"  class="btn btn-danger"><i class="glyphicon glyphicon-trash">Eliminar</i></a></td>';
                   echo '<td><a href="modificarEmpleado.php?cod='.$r['id'].'"  class="btn btn-success"><i class="glyphicon glyphicon-edit">Actualizar</i></a></td>';
                   echo '</tr>';
                       
                       }
                    }?>
					</tbody>
			</table>
            </div>
       </form>
<?php
include ('../foot.php');
?>
