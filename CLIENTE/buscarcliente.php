<?php
include('../header1.php');
?>
<br><br>
<h2 align="center" >BUSQUEDA DE CLIENTES</h2>
       <form role="form" method="get" id="busqueda">
           <div class="container">
           <div class="form-group" id="busqueda">
               <label>Razon Social</label>
               <input class="form-control" type="text" name="razon" id="razon">
           </div>
           <div class="form-group">
               <button class="btn btn-primary" type="submit" name="busca" id="busca"><span class="glyphicon glyphicon-search"></span>Buscar</button>
           </div>
           </div>
               <div class="container">
               <?php
           if(isset($_GET['busca'])){
               $rs=$_GET['razon'];
               include("../conecbase1.php");
               $q=" SELECT * FROM CLIENTE where razonsocial like '$rs%' order by razonsocial";
               $res=mysqli_query($con,$q);
               ?>
			<table  class="table table-bordered">
					<thead>
						<tr>
							<th width="20%"><b>Razon social</b></th>
							<th width="20%"><b>Nit / CI</b></th>
							<th width="20%"colspan="2">Operaciones</th>
						</tr>
					</thead>
					<tbody style="border: #002929 5px solid;">
                    <?php
                       while ($r=mysqli_fetch_array($res)) {
                   ?>
                   <tr valign="middle" bgcolor="#ddeeff">
                                <td> <?php echo $r['razonsocial'];?> </td>
                                <td> <?php echo $r[2];?> </td>
                                <td><a href="eliminar.php?cod=<?php echo $r['id']?>"  class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar </a></td>
                                <td><a href=" modificar.php?cod=<?php echo $r['id']?>"  class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Modificar </a></td>
                           </tr>
                           <?php
                       }
                    }?>
					</tbody>
			</table>
            </div>
                </div>
       </form>
       </div>
	</div>
<?php
include ('../foot.php');
?>
