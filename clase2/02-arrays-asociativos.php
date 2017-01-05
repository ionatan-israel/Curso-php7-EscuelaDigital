<?php
/**
 * Los array asociativos tienen llaves(posiciones),
 * definidas por el programador
 *
 * Todas las llaves de un array asociativos
 * deben ser string
 */

$numeros = [
'uno'    =>1,
'dos'    =>2,
'tres'   =>3,
'cuatro' =>4,
'cinco'  =>5
];
//muestra todos los indices o llaves de un array
var_dump($numeros);
//muestra un indice especifico del array.
var_dump($numeros['tres']);

 ?>
