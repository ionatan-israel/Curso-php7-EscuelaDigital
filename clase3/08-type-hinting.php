<?php

/**
 * Type hinting
 * podemos especificare el tipo de dato que recibimos en un parametro
 */

function saludar(array $nombres){
  foreach ($nombres as $datos) {
    echo "Hola, $datos. \n";
  }
}
saludar(["Patricia", "Marcelo", "Jennifer"]);
 ?>
