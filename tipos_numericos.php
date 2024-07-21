<?php

$var1 = 24;
var_dump(is_finite($var1));

$var2 = 1.8e956;
var_dump(is_finite($var2));

$variable1 = acos(8);
var_dump(is_nan($variable1));

$nombre = "mathew";
$edad = 24;
$telefono = "925614578";

var_dump(is_numeric($nombre)); //false
var_dump(is_numeric($edad)); //true
var_dump(is_numeric($telefono)); //true

$num = 22.47;
$int_cast=(int)$num;
echo $int_cast;

?>