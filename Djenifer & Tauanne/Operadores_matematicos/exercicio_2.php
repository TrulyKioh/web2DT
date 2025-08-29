<?php
//Entrada
$note_one = readline('Digite a primeira nota');
$note_two = readline('Digite a segunda nota');
$note_three = readline('Digite a terceira nota');

//Processamento
$average = ($note_one * 2 + $note_two * 3 + $note_three * 4) / 9;

//Saída
echo "A média ponderada é $average";