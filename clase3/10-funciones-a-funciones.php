<?php
/**
 * Realiza una operacion aritmetica
 * @param  Closure $operacion
 * @param  $mixed  $num1
 * @param  $mixed  $num2
 * @return $mixed            
 */
function aritmetica(Closure $operacion, $num1, $num2){
  //ejecuta el closures con parametros
  return $operacion($num1, $num2);
}
//funcion closure que suma
$sumar = function ($num1, $num2){
  return $num1 + $num2;
};
//funcion closure que resta
$restar = function ($num1, $num2){
  return $num1 - $num2;
};

//ejecutar la funcion aritmetica
echo aritmetica($sumar, 9, 2);

 ?>
