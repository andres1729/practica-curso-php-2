<?php
function conectar_bd()
{
	$servidor = "localhost";
	$nombrebd = "empresa";
	$usuario = "usuariobd";
	$contrasena ="contrasena";


/*mysql_connect — Abre una conexión al servidor MySQL
*Advertencia Esta extensión fue declarada obsoleta en PHP 5.5.0 y eliminada en PHP 7.0.0. En su lugar debería utilzarse las extensiones MySQLi o PDO_MySQL. 
*/
	$conexion = mysqli_connect($servidor,$usuario,$contrasena, $bd);
	

	return $conexion;
}















?>