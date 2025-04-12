<?php

$numeros = [3, 8, 12, 5, 7, 6, 14, 9, 10, 2];

$quantidadePares = 0;


foreach ($numeros as $num) {
    if ($num % 2 == 0) {
        $quantidadePares++;
    }
}


echo "Quantidade de números pares: " . $quantidadePares;
?>