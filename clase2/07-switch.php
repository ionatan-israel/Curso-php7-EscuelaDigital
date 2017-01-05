<?php

/**
 * La sentencia switch es similiar a la sentencia if,
 * excepto que no se usa una condicion sino un valor
 * que se desea comparar.
 *
 * Se pueden agregar muchos case
 *
 * si no se agrega el break como sentencia final
 * de un case, se ejecutan todas las sentencias siguientes.
 */

$polo = "PHP";

switch ($polo) {
  case 'CSS':
    echo "Tengo un polo CSS!";
    break;

  case 'JS':
    echo "Tengo un polo JS!";
    break;

  case 'HTML':
    echo "Tengo un polo HTML";
    break;

  default:
    echo "Oh, aun no tengo un polo :(";
    break;
}

 ?>
