<html>
    <head>
        
    </head>
    <body>
      <?php

#Codígo inperativo o espagueti

$automovil1 = (object)["marca" => "Toyota", "modelo"=>"corolla"];
$automovil2 = (object)["marca"=>"Hyundai", "modelo"=>"Accent vision"];

function mostrar($automovil){

	echo "<p>Hola! soy un $automovil->marca, modelo $automovil1-> modelo</p>";

}

mostrar($automovil1);
mostrar($automovil2);








     ?>

    </body>
    </html>