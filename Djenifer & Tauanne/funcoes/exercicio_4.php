<?php
function emailVerify (string $email): bool{
    $email = trim($email);
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

$email = readline('Digite seu email');
$isValid = emailVerify($email);

if($isValid){
    echo "O email $email é válido!";
}else{
    echo "O email $email é inválido!";
}