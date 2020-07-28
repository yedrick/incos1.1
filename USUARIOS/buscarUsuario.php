<?php
include('../header1.php');
?>
        <br><br>
        <h2 align="center" >BUSQUEDA USUARIO</h2><br><br>
       <form role="form" method="get" id="busqueda">
       <div class="container">
           <div class="form-group" id="busqueda">
               <label>Usuario</label>
               <input class="form-control" type="text" name="usuario" id="usuario">
           </div>
           <div class="form-group">
               <button class="btn btn-primary" type="submit" name="busca" id="busca">
                   <span class="glyphicon glyphicon-search">Buscar</span>
                </button>
           </div>
       </div>
       <div class="container">
               <?php
           if(isset($_GET['busca'])){
               $e=$_GET['usuario'];
               include("../conecbase1.php");
               $q=" SELECT * FROM usuarios where usuario like '$e%' order by usuario";
               $res=mysqli_query($con,$q);
               ?>
			<table  class="table table-bordered">
					<thead >
                    <tr >
                        <th align="center"><b>EMPLEADO</b></th>
                        <th align="center"><b>USUARIO</b></th>
                        <th align="center">NIVEL</th>
                        <th align="center" colspan="2">OPERACIONES</th>
                    </tr>
					</thead>
                    <tbody >
                    <?php
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
                }
                    ?>
					</tbody>
            </table>
            </div>
       </form>
<?php
include ('../foot.php');
?>
