<?php
$age = readline('Digite sua idade: ');

if (is_numeric(value: $age)){
    if($age > 17){
        echo "Maior de idade";
    }else{
        echo "Menor de idade";
    }
}else{
    echo "Digite uma idade válida!";
}