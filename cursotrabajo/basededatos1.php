<?php

$conn=mysqli_connect("127.0.0.1", "root", "", "libreria_cf");

 if ($conn->connect_error)
 die($conn->connect_error);

print "conexion exitosa";

exit(1);





?>