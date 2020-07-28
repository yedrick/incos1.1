<!DOCTYPE html>
<html>
<head><title>DISEÑO WEB II</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<body>
  <style>
    #cdt {
      background: gray;
      height: 400px;
      width: 400px;
      top: 250%;
      border-radius: 1em;
    }
  </style>
  <br><br><br>
  <br><br><br>
  <div class="container" id="cdt">
    <form name="formulario" id="formulario" method="POST" action="control.php"><br>
      <h3 align="center">INICIAR SESION</h3>
      
      <div class="form-group">
        <label>Usuario</label>
        <input type="text" id="user" class="form-control input-lg" name="user" required>
      </div><br>
      <div class="form-group">
        <label>Password</label>
        <input type="password" id="pasw" name="pasw" class="form-control input-lg" required>
      </div><br>
      
      <div class="form-group">
        <button class="btn btn-primary form-control" type="submit" value="ingresar" name="ingresar" id="ingresar">
          INGRESAR
        </button>
      </div>
      <div class="form-group">
        <?php
        if (isset($_GET['error'])) {
          $e = $_GET['error'];
          if ($e == 1) {
            echo '<div class="alert alert-danger form-control" role="alert">
            *Usuario o contraseña incorrecta
          </div>';
          }
          if ($e == 2) {
            echo "<p id='e1'>*Ingresar contraseña y usuario validos</p>";
          }
        }
        ?>
      </div>
    </form>
  </div>
  <?php
  include('foot.php');
  ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>