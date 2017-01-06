<?php

/**
 * Foreach
 *
 * Proporciona un modo sencillo de iterar sobre arrays y objetos.
 *
 * Pasa linea por linea del array mostarndo su contenido
 */
$polos = ['CSS', 'JS', 'HTML', 'PHP'];

foreach ($polos as $polo){
  echo "Tengo un polo de {$polo}. \n";
}
echo "\n";

/**
 * otra forma:
 * Ahora recorreremos el array por sus filas
 * y su contenido
 */

foreach ($polos as $fila => $value) {
    echo "La fila {$fila} tiene el valor {$value}.\n";
}

//Sintaxys alternativa
/*foreach ($polos as $fila => $value) :
    echo "La fila {$fila} tiene el valor {$value}.\n";
endforeach*/
 ?>
