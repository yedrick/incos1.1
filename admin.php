<?php
include("seguridad.php");
if ($_SESSION['nivel']==1) {
    header("location:view/principal.php");
}else{
    if($_SESSION['nivel']==2){
    header("location:view/seg.php");
    }
}
?>
