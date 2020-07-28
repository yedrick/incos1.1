<?php
session_start();
if ($_SESSION['ingreso']!="si") {
    header("location:index.php?error=2");
}
?>
