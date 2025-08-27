<?php
//Entrada
$distance = readline('Digite a distância em KM:');
$speed = readline('Digite a velocidade em KM/H:');

//Processamento
$time = $distance / $speed;

//Saída
echo "Você levará $time horas para percorrer $distance a velocidade constante de $speed";