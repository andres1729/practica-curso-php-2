<?php

include("basededatos.php");
$conexionbd=conectar_bd();
$query="SELECT id,nombre,edad FROM empleado,";
$resultado=mysqli_query($query,$conexion);
mysqli_close($conexionbd);




?>

<!DOCTYPE html>
 <html> 
 
 <head></head>
 <body>

 	<h1>Lista de empleados</h1>
 	   <ul>
 	   	<?php
 	   	    while($registro=mysqli_fetch_assoc($resultado))
 	   	{ 
 	   		echo '<li>'.$registro['nombre'].'('.$registro['edad'].'años)';
 	   		echo '<a href="modicarempleo.php?empleadoid='.$registro['id'].'">modificar</a></li>'; 
 	   		echo '<a href="eliminarempleadoid.php?empleadoid='.$registro['id'].">Eliminar</a>'; 	   	}
 	   	?>
 	   </ul>

 </body>
 </html>