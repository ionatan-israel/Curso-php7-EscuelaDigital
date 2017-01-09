<?php

/**
 * Dentro de metodos estaicos de una clase no podemos usar $this
 */
require_once "Hijo.php";

Hijo::$abuelos = 4;
echo Hijo::$abuelos;

$daniel = new Hijo("Daniel");

echo "\nDaniel tiene " . $daniel::$abuelos . " Abuelos.\n";

echo $daniel::saludar();
 ?>
