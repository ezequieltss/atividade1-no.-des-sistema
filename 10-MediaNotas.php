<?php

function calcularMedia($n1, $n2, $n3) {
    $media = ($n1 + $n2 + $n3) / 3;
    return $media;
}


$mediaFinal = calcularMedia(8.5, 7.0, 9.5);
echo "A média das notas é: " . number_format($mediaFinal, 2);
?>