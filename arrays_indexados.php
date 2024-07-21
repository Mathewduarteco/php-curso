<?php
/*Los arrays indezado son los arrays por defecto,
requiere especificar la posicion en la que se encuentra cada uno de los datos.
*/

$frutas = array("mango", "fresa", "naranja");
//podemos asignar el inide numerico manualmente aunque ya viene por defecto.
$frutas[22] = "mango";
$frutas[23] = "fresa";
$frutas[24] = "naranja";
// y acceder a cada posicion por su indice.
echo "la fruta del dia es ". $frutas[24];


?>