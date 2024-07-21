<?php

$puntuacion = 7.35;

switch ($puntuacion) {
    case ($puntuacion <5):
        echo "has suspendido";
        break;
    case ($puntuacion >=5 && $puntuacion <6):
        echo "aprobado raspado";
        break;
    case ($puntuacion >=6 && $puntuacion <7):
        echo "bien";
    case ($puntuacion >=7 && $puntuacion <9):
        echo "notable";
    case ($puntuacion >=9):
        echo "excelente";
        break;
}

?>