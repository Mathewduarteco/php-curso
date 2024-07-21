<?php

$semana-array("lunes", "martes", "miercoles", "jueves", "sabado", "domingo");
foreach ($semana as $dia) {
    echo "$dia ,";
}

$capitales-array("Canada"=>"Ottawa", "USA"=>"Washington D.C", "Espana"=>"Madrid", "Peru"=>"Lima");
foreach ($capitales as $clave=>$valor) {
    echo "$valor es la capital de $clave. </br>";
}

?>