<?php
$number = readline('Digite um número inteiro');

$is0dd = $number % 2 == 0;

if($is0dd){
    echo "O número escolhido é par";
}else{
    echo "O número escolhido é ímpar";
}