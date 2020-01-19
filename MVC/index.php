<?php 

#EL INDEX: En el mostraremos la salida de las vistas al usuario y tambien a traves de el enviaremos las distintas acciones que el usuario envie al controlador 

#require() establece que el codigo del archivo invocado es requerido, es decir, obligatorio para el funcionamiento del programa. Por ello, si el archivo especificado en la función require() no se encuentra saltára un error "PHP Fatal error" y el programa PHP se detendr+a.

#la versión require_once() funciona de la misma forma que sus respectivo, salvo que, al utilizar _once, se impide la carga de un mismo archivo más de una vez.

#si requerimos el mismo c+odigo más de una vez corremos el riesgo de redeclaraciones de variables, funciones o clases.

require_once "controllers/controller.php";
require_once "models/model.php";

#Estoy instancioando del controlador, le estoy pidiendo un objeto de la calse controlador
$mvc = new MvcController();
$mvc -> plantilla();


?>