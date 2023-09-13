<?php
// Forma Explicita de dizer as posições
$array1 = [
    0 => 40, //posicao 0, o simbolo => significa arrow
    1 => 200, //posicao 1
    2 => 100, //posicao 2
    3 => 150, //posicao 3
    4 => "Apresentação Array", //posicao 4
    5 => true //posicao 5
];

$array2 = [
    'joao' => 40, //podemos por o 'nome' da posicao com strings e/ou números
    140,
    3000 => 150,
];


echo $array2['joao'];
echo "\n";
echo $array2[3000];
echo "\n";
echo $array2[1];
echo "\n";
echo var_dump($array2); // o var_dump pega qualquer variável/valor e mostra completo