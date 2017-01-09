<?php

/**
 * El polimorfismo es la propiedad en la que un objeto
 * puede responder de manera diferente a un mismo mensaje
 *
 * es hacer la misma accion de forma diferentes
 */

require_once "Gato.php";
require_once "Perro.php";
require_once "persona.php";

//instancias de animal
$gato = new Gato;
$perro = new perro;

//Instancias de personas
$persona = new Persona;

//Cuidar a los animales
$persona->cuidar($gato);
$persona->cuidar($perro);





 ?>
