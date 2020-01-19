<?php
include("basededatos.php");

$conexionbd=conectar_bd();
echo "se realizó la conexion a la base de datos".$conexionbd;
mysqli_close($conexionbd);
?>