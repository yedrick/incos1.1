<?php session_start();?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>JUVENIL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body style="background-color:gray">
<?php if ($_SESSION['nivel']==1) {?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../admin.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Registros 
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a href="../PRODUCTO/registroProducto.php" class="dropdown-item">Productos<span class="glyphicon glyphicon-tag"></span></a>
              <a href="../PROVEEDOR/registroProv.php" class="dropdown-item">Proveedores<span class="glyphicon glyphicon-phone-alt"></span></a>
              <a href="../EMPLEADO/registraEmpleado.php" class="dropdown-item">Empleados<span class="glyphicon glyphicon-wrench"></span></a>
              <a href="../CARGO/registroCargo.php" class="dropdown-item">Cargos <span class="glyphicon glyphicon-briefcase"></span></a>
              <a href="../CLIENTE/registro.php" class="dropdown-item">Clientes<span class="glyphicon glyphicon-user"></span></a>
              <a href="../USUARIOS/registrarUser.php" class="dropdown-item">Usuarios<span class="glyphicon glyphicon-user"></span></a>
                      
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Listas 
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a href="../PRODUCTO/listarProducto.php" class="dropdown-item">Productos<span class="glyphicon glyphicon-tag"></span></a>
              <a href="../PROVEEDOR/listarProveedor.php" class="dropdown-item">Proveedores<span class="glyphicon glyphicon-phone-alt"></span></a>
              <a href="../EMPLEADO/listarEmpleado.php" class="dropdown-item">Empleados<span class="glyphicon glyphicon-wrench"></span></a>
              <a href="../CARGO/listaCargo.php" class="dropdown-item">Cargos <span class="glyphicon glyphicon-briefcase"></span></a>
              <a href="../CLIENTE/lista.php" class="dropdown-item">Clientes<span class="glyphicon glyphicon-user"></span></a>
              <a href="../USUARIOS/listarUser.php" class="dropdown-item">Usuarios<span class="glyphicon glyphicon-user"></span></a>
                      
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Busqueda
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a href="../PRODUCTO/buscarProducto.php" class="dropdown-item">Productos<span class="glyphicon glyphicon-tag"></span></a>
              <a href="../PROVEEDOR/buscarProveedor.php" class="dropdown-item">Proveedores<span class="glyphicon glyphicon-phone-alt"></span></a>
              <a href="../EMPLEADO/buscarEmpleado.php" class="dropdown-item">Empleados<span class="glyphicon glyphicon-wrench"></span></a>
              <a href="../CARGO/buscarCargo.php" class="dropdown-item">Cargos <span class="glyphicon glyphicon-briefcase"></span></a>
              <a href="../CLIENTE/buscarcliente.php" class="dropdown-item">Clientes<span class="glyphicon glyphicon-user"></span></a>
              <a href="../USUARIOS/buscarUsuario.php" class="dropdown-item">Usuarios<span class="glyphicon glyphicon-user"></span></a>
                      
          </div>
        </li>
      </ul>
            
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      <div class="my-2 my-lg-0">
          <a href="../salir.php" class="btn btn-primary">Salir</a>
      </div>
    </div>
  </nav>
<?php }else{?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../admin.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Registros 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="../PRODUCTO/registroProducto.php" class="dropdown-item">Productos<span class="glyphicon glyphicon-tag"></span></a>
            <a href="../PROVEEDOR/registroProv.php" class="dropdown-item">Proveedores<span class="glyphicon glyphicon-phone-alt"></span></a>
            <a href="../CLIENTE/registro.php" class="dropdown-item">Clientes<span class="glyphicon glyphicon-user"></span></a>        
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Listas 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="../PRODUCTO/listarProducto.php" class="dropdown-item">Productos<span class="glyphicon glyphicon-tag"></span></a>
            <a href="../PROVEEDOR/listarProveedor.php" class="dropdown-item">Proveedores<span class="glyphicon glyphicon-phone-alt"></span></a>
            <a href="../CLIENTE/lista.php" class="dropdown-item">Clientes<span class="glyphicon glyphicon-user"></span></a>       
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Busqueda
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="../PRODUCTO/buscarProducto.php" class="dropdown-item">Productos<span class="glyphicon glyphicon-tag"></span></a>
            <a href="../PROVEEDOR/buscarProveedor.php" class="dropdown-item">Proveedores<span class="glyphicon glyphicon-phone-alt"></span></a>
            <a href="../EMPLEADO/buscarEmpleado.php" class="dropdown-item">Empleados<span class="glyphicon glyphicon-wrench"></span></a>
            <a href="../CLIENTE/buscarcliente.php" class="dropdown-item">Clientes<span class="glyphicon glyphicon-user"></span></a>        
        </div>
      </li>
    </ul>
      
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <div class="my-2 my-lg-0">
        <a href="../salir.php" class="btn btn-primary">Salir</a>
    </div>
  </div>
</nav>
<?php }?>
  
    <br><br>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>