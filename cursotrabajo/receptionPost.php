<?php

$usuario=$_POST{'user'};

$password=$_POST{'pwd'};

$resultados=verificacionDatos($usuario, $password);
if ($resultados) {
	echo "Bienvenido";
	# code...
}
else{
	echo "Datos incorrectos";
}


function verificacionDatos ($Usuario, $Contraseña){
	if ($Usuario="Administrador" && $Contraseña=="admin1234"){
		return true;
	




   

}

    else {
	    return false;
}
}