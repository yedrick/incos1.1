<?php
include('../header1.php');
?>
        <br><br>
        <h2 align="center" >BUSQUEDA PROVEEDOR</h2><br><br>
       <form role="form" method="get" id="busqueda">
       <div class="container">
           <div class="form-group" id="busqueda">
               <label>EMPRESA</label>
               <input class="form-control" type="text" name="empresa" id="empresa">
           </div>
           <div class="form-group">
               <button class="btn btn-primary" type="submit" name="busca" id="busca"><span class="glyphicon glyphicon-search"></span>Buscar</button>
           </div>
       </div>
       <div class="container">
               <?php
           if(isset($_GET['busca'])){
               $e=$_GET['empresa'];
               include("../conecbase1.php");
               $q=" SELECT * FROM proveedor where empresa like '$e%' order by empresa";
               $res=mysqli_query($con,$q);
               ?>
			<table  class="table table-bordered">
					<thead >
						<tr >
							<th><b>EMPRESA</b></th>
                            <th><b>CONTACTO</b></th>
                            <th><b>EMAIL</b></th>
                            <th><b>TELEFONO</b></th>
                            <th><b>DIRECCION</b></th>
                            <th><b>LOGO</b></th>
							<th colspan="2">Operaciones</th>
						</tr>
					</thead>
					<tbody >
                    <?php
                       while ($em=mysqli_fetch_array($res)) {
                   ?>
                   <tr valign="middle" bgcolor="#ddeeff">
                                <td> <?php echo $em['empresa'];?> </td>
                                <td> <?php echo $em['contacto'];?> </td>
                                <td> <?php echo $em['mail'];?> </td>
                                <td> <?php echo $em['telefono'];?> </td>
                                <td> <?php echo $em['direccion'];?> </td>
                                <td>
                                <?php
                                echo "<img width='50' src='../img/" .$em['logo']."'>";
                                ?>
                                </td>
                                <td><a href="eliminarProveedor.php?cod=<?php echo $em['id']?>"  class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar </a></td>
                                <td><a href="modificarProveedor.php?cod=<?php echo $em['id']?>"  class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Modificar </a></td>
                           </tr>
                           <?php
                       }
                    }?>
					</tbody>
            </table>
            </div>
       </form>
<?php
include ('../foot.php');
?>
