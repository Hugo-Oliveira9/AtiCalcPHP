<?php

require_once 'Calculadora.php';

$calculadora = new Calculadora();

$numero1 = 10;
$numero2 = 25;

$soma = $calculadora->somar($numero1, $numero2);

echo "A soma é: " . $soma . PHP_EOL;