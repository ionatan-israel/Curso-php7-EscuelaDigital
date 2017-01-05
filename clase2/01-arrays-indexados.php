<?php

//Crear un ArrayAccess
$lenguajes = array ('html','css','js');

//Otra forma de crear un array:
$lenguajes = ['html','css','js'];
var_dump($lenguajes);

$integers = [3,5,8,6];
var_dump($integers);

//setea algunas varibales
$uno = 1;
$dos = 2;
$tres = 3;

$variables = [$uno, $dos, $tres];
var_dump($variables);

//seleccionar un indice del Array
$indice = $lenguajes[0];
var_dump($indice);

 ?>
