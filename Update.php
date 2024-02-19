<?php

include("conexion.php");
$con=conectar();

$NOMBRE=$_POST['NOMBRE'];
$AUTOR=$_POST['AUTOR'];
$DISPONIBILIDAD=$_POST['DISPONIBILIDAD'];
$FECHA=$_POST['FECHA'];

$sql="UPDATE reto22 SET  AUTOR='$AUTOR',DISPONIBILIDAD='$DISPONIBILIDAD',FECHA='$FECHA' WHERE NOMBRE='$NOMBRE'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: libreria.php");
    }
?>