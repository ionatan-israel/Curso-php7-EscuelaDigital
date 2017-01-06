<?php
require_once "Producto.php";

$producto = new Producto;

//setea propiedades
$producto->nombre = "camiseta de CSS \n";
$producto->talla = "L \n";
$producto->precio = 12;

//Acceder a las propiedades
echo $producto->nombre;
echo $producto->talla;
echo $producto->precio;

//Crea otra intancia de producto
$producto2 = new Producto;

$producto2->nombre = "camiseta de JS \n";
$producto2->talla = "S \n";
$producto2->precio = 11 ;
echo "\n";
echo "Otro producto: $producto2->nombre \n";
 ?>
