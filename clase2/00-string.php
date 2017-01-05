<?php

$nombreProducto = "Polo de CSS";
var_dump($nombreProducto);

/**
 * Ejemplos de la diferencia entre comillas y comillas simples:
 */

$valor = 'Polo de JS';

$primero = 'Quiero un $valor';
var_dump($primero);

$segundo = "Quiero un $valor";
var_dump($segundo);

//Buena practica: Forma mas legible y util cuando estemos usando Array
$resultado = "Resultado: Quiero un {$valor}";
var_dump($resultado);


//concatenacion:
$uno = "Yo quiero ";
$dos = "un polo de JS ";
$tres = "en talla L";
var_dump($uno . $dos . $tres);

/**
 * En javascript el + se usa para concatenar
 * En PHP EL + ES SOLO UN OPERADOR MATEMATICO
 * En PHP para concatenar se usa el .
 */
 ?>
