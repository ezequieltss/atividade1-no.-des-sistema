<?php

$numero1 = 10;
$numero2 = 5;


$soma = $numero1 + $numero2;
echo "Soma: $soma <br>";


$subtracao = $numero1 - $numero2;
echo "Subtração: $subtracao <br>";


$multiplicacao = $numero1 * $numero2;
echo "Multiplicação: $multiplicacao <br>";


if ($numero2 != 0) { 
    $divisao = $numero1 / $numero2;
    echo "Divisão: $divisao <br>";
} else {
    echo "Divisão: Não é possível dividir por zero! <br>";
}
?>