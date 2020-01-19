<?php
    
    $edad [0]=22;
    $edad [1]=17;
    $edad [3]=13;

    $i=0;

    do {


   if ($edad[0]>=18){
   	echo "La persona";
    echo $i+1;
    echo "puede ser registrada<br>";

   }
   elseif ($edad[0]>=15) {
    echo "La persona ";
    echo $i+1;
    echo "Puede ver nuestros correos<br>";
     # code...
   }



   else{
   	echo "La persona ";
    echo $i+1;
    echo "no puede ser registrada";
   }

   $i++;

  }

  while ( $i<3);