<?php

// &&(and), ||(or), !
$canAcess = true;
$isOlder = false;

// Exemplo
// Caso você tenha a constante $canAcess e ela seja true,
// Quando você usar o ! ele vai transformar a constante em false e vice versa.
// Agora caso você use dois ! ele vai manter o mesmo valor
// var_dump(!$canAcess) // Transforma o valor da constante ao oposto


// $result = $canAcess && $isOlder; // Verifica se ambos são verdadeiros
// $result = $canAcess || $isOlder; // Verifica se algum dos dois é verdadeiro

// Com base na precedencia dos operadores, vai retornar sempre o primeiro valor após o =
// $result = $canAcess and $isOlder;
// $result = $canAcess or $isOlder;

var_dump($result);