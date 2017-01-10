<?php

/*Conectar*/             //servidor   user      pass       bd
$mysqli = mysqli_connect('127.0.0.1', 'root', 'webphp', 'tienda');

 /* Verificar la conexion*/
 if (mysqli_connect_errno($mysqli)) {
   echo "Fallo al conectar a MYSQL" . mysqli_connect_errno();
 }

 /* Ejecutar la sentnecia sql (query)*/

 /* Imprimir datos*/

 /* Liberar memoria de resultado*/

 /* Cerrar conexion*/
mysqli_close($mysqli);








 ?>
