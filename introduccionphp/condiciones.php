<?php 

# condiciones nos referimos perdirle a la funcion que cuando ejecute una tarea, la ejecute de acuerdo a una funcion
$a=15; #si a=5 no aparece el echo puesto que no cumple con la condicion
$b=10;

if($a>$b){
	echo "a es mayor que b<br>";
}

else if($a==$b){ 
	echo "a es igual que b";
}

else{
	echo "a es menor que b";
}

#suiches 
$dia = "sabado";

switch($dia){

	case 'sabado':
	echo "voy a estudiar php<br>";

	case 'viernes':
	echo "voy a la fiesta";
	break; 

	case 'domingo':
	echo "voy a descansar";
	break;

	default: echo "voy a la universidad";
}

echo "<br><br>";

#ciclo while permite dar una condicion

$n = 1;

while ($n <= 5) {
	echo $n;
	$n++; #++ signofoca incremento

}

echo "<br><br>";

#CICLO DO WHILE similar al ciclo while simplemente declaro una variable

$p = 1;

do{
	echo $p;
	$p++;
}
while($p <= 5);

echo "<br><br>";

#CICLO FOR es simplemente colocar dentro del metodo for una variable

for($i = 1; $i<= 5; $i++){

	echo $i;
}


?>