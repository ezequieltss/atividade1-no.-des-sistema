<?php

function ehPrimo($numero) {
    
    if ($numero <= 1) {
        return false;
    }

    
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; 
        }
    }

    return true;
}

$testes = [2, 3, 4, 5, 10, 11, 15, 17, 20];

foreach ($testes as $numero) {
    if (ehPrimo($numero)) {
        echo "$numero é primo.<br>";
    } else {
        echo "$numero não é primo.<br>";
    }
}
?>