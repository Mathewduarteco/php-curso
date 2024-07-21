<?php

$letters = [ 'A', 'B', 'C' ];
foreach ($letters as $letter) {
    if ('A' == $letter) {
        continue;
        echo 'Esto nunca se imprimira';
    }
    echo $letter;
}

$letters = [ 'A', 'B', 'C' ];
foreach ($letters as $letter) {
    if ('A' == $letter) {
        break;
        echo 'Esto nunca se imprimira';
    }
    echo $letter;
}

?>