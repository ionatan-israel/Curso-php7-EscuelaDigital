<?php

/**
 * Es un array que contiene otros arrays.
 * @var [type]
 */
$cosas = [
  "animales" =>["gato", "perro", "pez"],
  "colores" =>["amarillo", "verde"],
  "ropa"    =>["camisa", "pantalon"],
  ];
var_dump($cosas);

//mostar solo la posicion 1 del sub-array animales
$animales = $cosas["animales"];
var_dump($animales[1]);

 ?>
