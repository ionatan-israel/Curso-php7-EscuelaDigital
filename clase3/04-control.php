<?php

/**
 * break:
 * Finaliza la ejecucion de la estructura
 * for, forech, while, do-while o switch en curso
 *
 *   y Continue
 */

 $polos = ['CSS', 'JS', 'HTML', 'PHP'];

 foreach ($polos as $posicion =>$polo){
   echo "Tengo un polo de {$polo} en la posicion {$posicion}. \n";
    }


 /**
  * Usando el break, corta la ejecucion.
  * @var [type]
  */


 foreach ($polos as $posicion =>$polo){
   echo "Tengo un polo de {$polo} en la posicion {$posicion}. \n";
   break;
   echo "Esto no llega a ejecutarse, solo la primera instruccion ya que el Break corta la ejecucion";
 }
echo "\n";
/**
 * Continue;
 *
 * En esta siguente foreach nos saltaremos el polo
 * de JS usando continue;
 */

 foreach ($polos as $posicion => $valor) {
   if ($valor == "JS") {
    continue;
   }
   echo "Tengo un polo de $valor y su posicion es $posicion. \n";
 }

 ?>
