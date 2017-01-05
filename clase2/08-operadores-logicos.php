<?php
/**
 * Comparan entre false o true
 */

$a = true;
$b = false;

/**
 * and = y
 * && = y
 * devuelve true si ambos son true
 */
 var_dump($a and $b);
 var_dump($a && $b);

 /** or = o
 * || = o
 * Devuelve si cualquiera de los dos es true*/
 var_dump($a or $b);

 /**
 * !- = negativo
 * devuelve el valor contrario
 * devueve true si el valor de la variable es false
 */
var_dump(true);

/**
 * xor
 *
 * devuelve trrue si uno de los operandos es true
 */
var_dump(true xor false);
var_dump(true xor true);

 ?>
