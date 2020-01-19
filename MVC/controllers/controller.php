<?php 

class MvcController{

	#LLAMADA A LA PLANTILLA
	#-----------------------------------

	public function plantilla(){

		include "views/template.php";  #El include es un metodo para incluir otro archivo php
	}

	#INTERACCIÓN DEL USUARIO
	#--------------------------------------
	public function enlacesPaginasController(){

		if (isset($_GET["action"])) {
			# code...
		

		$enlacesController = $_GET["action"];
     }

     else {

     	$enlacesController = "index.php";
     }
		
		$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

		include ($respuesta);


	}


}




?>