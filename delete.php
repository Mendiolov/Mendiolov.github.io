<?php

include("conexion.php");
$con=conectar();

$ID=$_GET['ID_nombre'];

$sql="DELETE FROM reto22  WHERE nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: libreria.php");
    }
?>