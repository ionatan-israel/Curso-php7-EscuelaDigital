<?php

/**
 * Las clase abstractas son contratos parciales que pueden contener metodos abstractos y metodos reales.
 */

abstract class Animal{

  abstract public function hablar();
  public function saludar(){
    return "Hola ";
  }

}

 ?>
