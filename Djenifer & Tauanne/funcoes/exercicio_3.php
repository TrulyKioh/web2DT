<?php
function palindromeVerify(string $word): bool{
    $word = mb_strtolower($word); //Letra minúscula
    $reversed = strrev( $word);
    return $word == $reversed;
}

$word = readline('Digite uma palavra qualquer: ');
if(!empty($word)){
    $isPalindrome = palindromeVerify($word);
    if($isPalindrome){
        echo "A palavra '$word' é palíndroma!";
    }else{
        echo "A palavra '$word' NÃO É PALÍNDROMA!";
    }
}

