<?php

/**
 * Parametros
 *
 * Una funcion puede tener mas de un parametro
 */

 function saludar($nombre){
   echo "Hola $nombre. \n";
 }
   saludar("Rodolfo");


 function sumar($numero1, $numero2, $numero3){
     return $numero1 + $numero2 + $numero3;
   }
    echo sumar(4, 5, 1 );

echo "\n";


function bienvenidos(){
  $nombres = func_get_args();
  foreach ($nombres as $nombres) {
    echo "Bienvenido, $nombres. \n";
  }

}

bienvenidos("Airam","Mateo","Rodolfo");

  /**
   *   func_get_args();
   *   funcion que retorna todos los valortes
   *   de los parametros ingresados.
   *
   * Este pasa o se usa cuando no conocemos el numero de parametros de las funciones.
   */
 ?>
