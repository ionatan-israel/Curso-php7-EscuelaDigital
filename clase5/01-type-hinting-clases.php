<?php
require_once "Hijo.php";

class Familia{

  public function miembro(Hijo $persona){

    echo $persona->nombre;
    echo $persona->apellido;
  }

}
//instancia de la clase Hijo
$persona = new Hijo("Daniel ");

//Usando la clase Familia
  $familia = new Familia;
  $familia->miembro($persona);
 ?>
