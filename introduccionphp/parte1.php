<?php

#variable numerica 
# es un comentario al igual que //

// comentario como $

# $ es una variable 
$numero = 5;
echo "Esto es una variable Número: $numero<br>";
var_dump($numero);
echo "<br><br>";

#variable palabra
$palabra = "palabra";
echo "Esto es una variable palabra: $palabra<br>";
var_dump($palabra);
echo "<br><br>";

#variable boleana
$boleana = "true";
echo "Esto es una variable boleana: $boleana<br>";
var_dump($boleana);
echo "<br><br>";

#variable arreglo
$colores = array("rojo","amarillo" );
echo "Esto es una variable arreglo: $colores[1]<br>";
var_dump($colores);
echo "<br><br>";

#variable verduras con propiedades 
$verduras = array("verdura1"=>"lechuga", "verdura2"=>"cebolla");
echo  "Esto es una vraiable arreglo con propiedades: $verduras[verdura1]<br>";
var_dump($verduras);
echo "<br><br>";

#variables objeto 
$frutas = (object)["fruta1"=>"pera" , "fruta2"=>"manzana"];
echo "Esto es una variable objeto con propiedades: $frutas->fruta1<br>";
var_dump($frutas);

?>