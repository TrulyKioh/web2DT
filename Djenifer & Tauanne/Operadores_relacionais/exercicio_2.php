<?php
$note = readline('Digite sua nota: ');

if (!is_numeric(value: $note)) {
    echo "A nota é inválida!";
    exit;
}

if ($note >= 7) {
    echo "Aprovado!";
} else {
    echo "Reprovado!";
}
