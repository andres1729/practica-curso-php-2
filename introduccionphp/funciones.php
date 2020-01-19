<?php

#funciones sin parametros 

function saludo(){

    echo "hola<br>";

}

saludo();

#funciones con parametros

function despedida($adios){

	echo $adios."<br>";
}
 
despedida("adios");

#funciones con retorno

function retorno($retornar){

	return $retornar;
}   

echo retorno("retornar");

# Se usa para programacion orientada a objetos


?>