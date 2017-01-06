<?php

/**
 * Closures
 *
 * Funciones que no tienen nombre, conocidas
 * como funciones anonimas
 *
 * estas funciones deben terminar en punto y coma ;
 *
 * Podemos asignar closures a variables y
 * con el nombre de las variables llamar a la funcion
 */

function (){
  echo "Soy una funcio anomina. \n";
};

$gato = function(){
  echo "Miau. \n";
};

$gato();

 ?>
