<?php
/* STRINGS SÃO UMA CADEIA DE CARACTERES
STRINGS NÃO TEM LIMITES DE ARMAZENAMENTO
PODE DAR QUEBRA DE LINHA DA STRING PARA DEIXAR 'MELHOR' VISUALMENTE
*/

/*
echo "Testes De Strings";

$variavel = "Exemplos de Strings
PARA TESTES DE QUEBRA DE LINHA
BLA BLA BLA TESTES";

echo $variavel;
*/
// O '.' PERMITE A LIGAÇÃO DE UMA CADEIA DE CARACTERES COM OUTRA CADEIA

$string1 = "Strings Testes";
$string2 = "Iniciando com PHP";
echo "\n";
echo $string1 . $string2;
echo "\n";
echo "Pedro" . "João";
echo "\n";
echo $string1 .' '. $string2;
echo "\n";
$string3 = $string1 .' '. $string2;
echo "\n";
$string4 = "$string1 $string2";
echo $string4;
echo "\n";
$string5 = '$string1 $string2'; // Mostra como um texto
echo $string5;
