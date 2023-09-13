<?php
// Arrays são Matriz
$array = array(40, 200, 100, 150, "Apresentação Array", true); //aqui chamamos uma função com o array()
//Declaração flexível
$array = array(
    40, 
    200, 
    100, 
    150, 
    "Apresentação Array", 
    true
); 

// echo $array;

// echo array(40, 200, 100, 150, "Apresentação Array", true);

echo $array[0]; //as arrays trabalham com posição, sempre iniciando na pos. zero, nesse exemplo é a 40
echo "\n";
echo $array[5];
echo "\n";
echo array(40, 200, 100, 150, "Apresentação Array", true)[4];

$array2 = [ //utilizar a [] com valores separados por , é uma array também
    40, 
    200, 
    100, 
    150, 
    "Apresentação Array", 
    true
];  // trabalhar com colchetes fica melhor por ser mais LIMPO na visualização do código, mas é apenas estética