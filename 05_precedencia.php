<?php

// O PHP segue a seguinte lógica de precedência:
$soma = 5 + 3 * 8; // primeiro ele vai visualizar quais são os operadores, e nesse caso vai realizar primeiro a * pq é prioridade
$soma = 5 + 24; // após isso vai fazer a soma
$soma = 29; // chegando ao resultado da variável

$string = "Curso de PHP"."Precedencia em PHP";
$string = "Curso de PHPPrecedencia em PHP";

echo 5 + 3 * 8;

// SEMPRE SERÁ da esquerda ----> direita