<?php

$polo = "CSS";
/**
 * isset determina si una variable esta definida y no es nula
 */
var_dump(isset($polo));

/**
 * Si la variable polo esta definida y no es null imprime su valor
 *
 * De lo contrario arroja un mensaje X
 */
var_dump(isset($polo) ? $polo: "Un mensaje X");

/**
 * Operador de fusion de null
 */
var_dump($polo ?? "Un mensaje X");
 ?>
