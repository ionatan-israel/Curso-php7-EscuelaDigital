<?php

require_once "Fabrica.php";

$fabrica = new Fabrica();

$mesa1 = $fabrica->fabricarMesa("Marron",4);
$mesa2 = $fabrica->fabricarMesa("Negro",8);

echo "La mesa 1 es de color {$mesa1->getColor()} \n";

echo "La mesa 2 es de color {$mesa2->getColor()}";

 ?>
