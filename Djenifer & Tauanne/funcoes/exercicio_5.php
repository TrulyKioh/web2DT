<?php
function celsiusToFahrenheit(int $celsius): float
{
    return $celsius * 1.8 + 32;
}

function fahrenheitToCelsius(int $fahrenheit): float
{
    return ($fahrenheit - 32) / 1.8;
}

$celsius = readline('Digite a temperatura em °C: ');
$fahrenheit = celsiusToFahrenheit($celsius);
