<?php
// Entrada
$first_number = readline('Digite um número:');
$second_number = readline('Digite outro número:');

// Processamento
$sum = $first_number + $second_number;
$subtraction = $first_number - $second_number;
$multiply = $first_number * $second_number;
$division = $first_number / $second_number;

// Saída (Interpolação)
echo "A soma dos números $first_number e $second_number é $sum\n";
echo "A subtração dos números $first_number e $second_number é $subtraction\n";
echo "A multiplicação dos números $first_number e $second_number é $multiply\n";
echo "A divisão dos números $first_number e $second_number é $division";