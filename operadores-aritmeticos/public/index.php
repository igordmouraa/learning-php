<?php

$number1 = 1;
$number2 = 5;

// // Soma
// echo $number1 + $number2;

// // Subtração
// echo $number1 - $number2;

// // Multiplicação
// echo $number1 * $number2;

// // Divisão
// echo $number1 / $number2;

// // Resto
// echo $number1 % $number2;

// Precedencia de operadores, consultar na documentacao a ordem que é sempre executada de cima a baixo
$operacao = $number1 + $number2 * 3;

// Precedencia sobre a soma entre parenteses 
$operacao2 = ($number1 + $number2) * 3;

// Caso eu tenha duas constantes com o mesmo nome, sempre sera chamada a ultima declarada

echo $operacao;
echo $operacao2;