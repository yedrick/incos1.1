<!DOCTYPE html>
<html lang="es">
<head>
    <title>JUVENIL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap3/css/bootstrap.min.css">
    <link href="bootstrap3/css/stylos.css" rel="stylesheet">
</head>
<body style="background-image: url('bootstrap3/img/fondo.jpg')">
    <header>
        <style>
            .footer {
                background: black;
                align-self: flex-end;
                color: blanchedalmond;
                position: fixed;
                padding: 1em;
                width: 100%;
                margin-top: 0px;
                height: 80px;
                bottom: 0;
            }
        </style>
        
        <?php
           include('../header1.php');
           ?>
    </header><br><br><br><br><br><br>
    <div align="center">
        <h1 class="text-danger text-uppercase">BIENVENIDO </h1>
        <h2 class="text-success text-uppercase">Administrador <?php echo$_SESSION["nombre"]?></h2>
    </div>
    <footer class="footer "><br><br>
        <div class="footer-copyright text-center py-3"> @ 2020 Copyright:
            <a href="#"> Juvenil.com</a>
        </div>
    </footer>
    <?php
    include('../foot.php');
    ?>

