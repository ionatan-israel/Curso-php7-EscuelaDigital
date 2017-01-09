##INCLUDE

Include, incluye y evalua el archivo especificado.

Sintaxis:
Include "suma.php";

cuando se incluye un archivo ese codigo (que se esta incluyendo) hereda el ambito de las variables.

Al incluir dos veces el codigo este genera error, es necesario incluirlo solo una vez.


##INCLUDE_ONCE

se comporta iguala include, la unica diferencia, es que si el codigo ya a sido incluido (dos veces),
simplemente no arroja error, pero lo ignora, no lo imprime dos veces.

Aca no genera error pero solo lo lee una vez.
Se una para asegurarse de usar el mismo codigo en distintas partes del programa sin que genere error.


##REQUIRE

Es igual que include, excepto que en caso de que falle la inclusion de que no consiga
incluir el archivo va a causar un error fatal, y detiene por completo la ejecucion.

con require  muestra un mensaje de advertencia.

Y al igual que el include, si agrego dos veces el codigo genera error fatal.


##REQUIRE_ONCE

Al igual que en iclude_once  no generar error en que incluya dos veces el codigo,
Solamente arroja true y sigue con su ejecucion sin tomarlo en cuenta.

Se recomienda usar REQUIRE_ONCE para evitar errores en inclucio de archivos mas de una vez
y por si el include no logra encontrar el archivo.


##EJEMPLOS DE UNA SINTAXYS DE UNA CLASE Y CREACION DE UN OBJETO

Las clases son como un plano para crear objetos.

require_once "Producto" //Llamo archivo que contiene la clase con sus atributos y propiedades.

$producto = new Producto //Creo una nueva instancia de LA clase Producto.

//Setea las propiedades de la clase, Al crear un nuevo objeto de producto
seteo las propiedades, llamandolas para mi nuevo productos y asignandoles
un valor

$producto->nombre = "Camiseta de CSS";
$producto->talla = "L";
$producto->precio = "12";

//Acceder a las propiedades (imprimirlas)
echo $producto->nombre;
echo $producto->talla;
echo $producto->precio;

Las propiedades de las clases pueden tarer su valor por defecto, lo que si no seteo
o defino el valor de la propiedad al crear el objeto este toma por defecto los valores
de las propiedades de la clase.
Al definir o setear un valor al crear el objeto pierde el valor por defecto.


##METODOS

Los metodos son funciones dentro de la clase.

Y para acceder a las propiedades de la propia instancia (el objeto en que nos enconramos),
usamos la palabra '$THIS'

En vez de usar
echo $producto->nombre;

Se usaria
echo $this->nombre;

Por que estamos en la instancia productos y queremos traer sus propiedades.


##CONSTRUCTOR

Con cada clase podemos especificar una funcion que se va a ejecutar cada vez que
recien se crea la instancia de esa clase.

function _ _ construct(){
  echo "He sido construido";
}

esta funcio se ejecutara pese a no ser invocada al crear el objeto


##BUENAS PRACTICAS Y APUNTES

Se recomienda que si un archivo incluye clases este debe tener el mismo nombre de la
clase, y su primera letra debe ser en mayuscula.
