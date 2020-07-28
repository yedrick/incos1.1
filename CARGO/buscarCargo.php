<?php
include('../header1.php');
?>
        <br><br>
        <h2 align="center" >BUSQUEDA CARGO</h2><br><br>
       <form role="form" method="get" id="busqueda">
           <div class="container">
           <div class="form-group" id="busqueda">
               <label>Cargo</label>
               <input class="form-control" type="text" name="cargo" id="cargo">
           </div>
           <div class="form-group">
               <button class="btn btn-primary" type="submit" name="busca" id="busca"><span class="glyphicon glyphicon-search"></span>Buscar</button>
           </div>
           </div>
           <div class="container">
               <?php
           if(isset($_GET['busca'])){
               $c=$_GET['cargo'];
               include("../conecbase1.php");
               $q=" SELECT * FROM cargo where cargo like '$c%' order by cargo";
               $res=mysqli_query($con,$q);
               ?>
			<table  class="table table-bordered" id="tbl">
					<thead >
						<tr >
							<th width="20%"><b>Cargo</b></th>
							<th width="40%" colspan="2">Operaciones</th>
						</tr>
					</thead>
					<tbody >
                    <?php
                       while ($cg=mysqli_fetch_array($res)) {
                   echo '
                   <tr valign="middle" bgcolor="#ddeeff">
                   <td>  '.$cg['cargo'].' </td>';
                    echo '<td><a href=" eliminarCargo.php?cod='.$cg['id'].'"  class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar </a></td>';
                     echo '<td><a href=" modificarCargo.php?cod='.$cg['id'].'"  class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Modificar </a></td>';
                    echo '</tr>';
                       }
                    }?>
					</tbody>
			</table>
       </form>
       <?php
include ('../foot.php');
?>
