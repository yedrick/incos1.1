<!DOCTYPE html>
<html lang="es">
<head>
    <title>JUVENIL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
    <link href="bootstrap3/css/stylos.css" rel="stylesheet">
</head>

<body style="background: #ccffff">
    <header>
        
        <?php
           include('../header1.php');
           ?>
    </header>
    <br><br><br><br><br><br>
    <div align="center">
        <h1 class="text-danger text-uppercase">BIENVENIDO </h1>
        <h2 class="text-success text-uppercase">Empleado <?php echo$_SESSION["nombre"]?></h2>
    </div>
<?php
include('../foot.php');
?>
