<?php

/**
 *Las interfaces son muy similares a las clases absractas
 *excepto que no contiene logica
 *son unicamente un contrato que deben cumplir las cases que hereden de ellas
 *
 */

interface AnimalInterface{
  
  public function comer($comida);
  public function hablar();
}


 ?>
