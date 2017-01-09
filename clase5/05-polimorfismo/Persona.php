<?php
/**
 * Quien cuidara de los animales
 */

class Persona{

  public function cuidar(AnimalInterface $animal){

    echo $animal->hablar();
    echo $animal->comer("Carne");
  }

}

 ?>
