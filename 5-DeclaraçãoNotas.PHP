<?php

$nota1 = 6.5;
$nota2 = 7.0;
$nota3 = 8.0;


$media = ($nota1 + $nota2 + $nota3) / 3;


echo "Média: " . number_format($media, 2) . "<br>";


if ($media >= 7) {
    echo "Aprovado";
} elseif ($media >= 5) {
    echo "Recuperação";
} else {
    echo "Reprovado";
}
?>