<?php

function obtenerElSignificadoDeLaVida(){
  //retorna un valor
  return 42;
  //esto no llega a ejecutarse
}
//imprimo valor del return
var_dump(obtenerElSignificadoDeLaVida());

//asigno valos del return a una varible
$resultado = obtenerElSignificadoDeLaVida();
var_dump($resultado);
 ?>
