<?php
//Entrada
$note_one = realine('Digite a primeira nota');
$note_two = realine('Digite a segunda nota');
$note_three = realine('Digite a terceira nota');

//Processamento
$average = ($note_one * 2 + $note_two * 3 + $note_three * 4) / 9;

//Saída
echo "A média ponderada é $average";