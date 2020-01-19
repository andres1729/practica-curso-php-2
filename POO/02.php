<?php

#CLASE:
#Una clase es un modelo que se utiliza para crear objetos que comparten un mismo comportamiento, estado o identidad.
#primera letra en mayuscula para separar otros tipos de nombres como nombres de funciones o nombres de variables
class Automovil{

    #PROPIEDADES:
	#son caracteristicas que pueden tener un objeto (publicas, privadas, las mas comunes son las propiedades publicas)
    #publica para que pueda ser accedidas de cualquier parte de la aplicacion sin ningun tipo dde restriccion
	
	public $marca;
	public $modelo;

	#MËTODO
	#Es el algoritmo asociado a un objeto que indica la capacidad de lo que éste puede hacer. LA unica diferencia entre metodo y función, es que llamamos método a las funciones de una clase (en la POO), mientras que llamamos funciones, a los algoritmos de la programacion estructurada

	public function mostrar(){

		echo "<p>Hola! soy un $this->marca,modelo $this->modelo</p>";
	}





}    

#OBJETO
#Una identidad provista de métodos o mensajes a los cuales responde propiedades con valores concretos

$a=new Automovil();
$a -> marca = "Toyota";
$a -> modelo = "Corolla";
$a -> mostrar ();

$b = new Automovil();
$b -> marca= "Hyundai";
$b -> modelo= "Accent Vision";
$b -> mostrar();






?>