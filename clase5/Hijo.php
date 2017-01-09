<?php
/**
 * Extender de una clase significa tener todas las propiedades de
 * la clase papa
 */
require_once "Papa.php";

class Hijo extends Papa{

  public static $abuelos;

  function __construct($nombre){
    $this->nombre = $nombre;
  }

public static function saludar(){
  echo "Hola yo tengo ". self::$abuelos . " abuelos";
}

}


 ?>
