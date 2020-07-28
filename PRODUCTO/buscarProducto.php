<?php
include('../header1.php');
?>
<br><br>
    <h2 align="center">BUSQUEDA DE PRODUCTOS</h2><br><br>
       <form role="form" method="get" id="busqueda">
           <div class="container">
           <div class="form-group" id="busqueda">
               <label>Nombre del producto</label>
               <input class="form-control" type="text" name="nombreproducto" id="nombreproducto">
           </div>
           <div class="form-group">
               <button class="btn btn-primary" type="submit" name="busca" id="busca"><span class="glyphicon glyphicon-search"></span>Buscar</button>
           </div>
           </div>
               <div class="container">
               <?php
           if(isset($_GET['busca'])){
               $nombre=$_GET['nombreproducto'];
               include("../conecbase1.php");
               $q="SELECT * FROM producto  where nombreproducto like '$nombre%' order by nombreproducto";
               $res=mysqli_query($con,$q);
               ?>
            <table  class="table table-bordered">
            <thead >
                        <tr >
                            <th  align="center"><b>Nombre</b></th>
                            <th  align="center"><b>Descripcion</b></th>
                            <th  align="center"><b>Costo Venta</b></th>
                            <th  align="center"><b>Costo Compra</b></th>
                            <th  align="center"><b>Stock</b></th>
                            <th  align="center"><b>Fecha</b></th>
                            <th  align="center"><b>Empresa</b></th>
                            <th  align="center" colspan="2">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody >
                    <?php
                       while ($r=mysqli_fetch_array($res)) {
                   ?>
                   <tr valign="middle" bgcolor="#ddeeff">
                                <td> <?php echo $r['nombreproducto'];?> </td>
                                <td> <?php echo $r['descripcion'];?> </td>
                                <td> <?php echo $r['costoventa'];?> </td>
                                <td> <?php echo $r['costocompra'];?> </td>
                                <td> <?php echo $r['stock'];?> </td>
                                <td> <?php echo $r['fecha'];?> </td>
                                <td> <?php echo $r['proveedor_id_proveedor'];?> </td>
                                <td><a href="eliminarProducto.php?cod=<?php echo $r['id']?>"  class="btn btn-danger"><i class="glyphicon glyphicon-trash">Eliminar</i></a></td>
                                <td><a href="modificarProducto.php?cod=<?php echo $r['id']?>"  class="btn btn-success"><i class="glyphicon glyphicon-edit">Actualizar</i></a></td>
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
