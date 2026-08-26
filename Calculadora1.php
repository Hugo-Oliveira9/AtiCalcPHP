<?php

class Calculadora
{
    public function somar(float $numero1, float $numero2): float
    {
        return $numero1 + $numero2;
    }

    public function subtrair(float $numero1, float $numero2): float
    {
        return $numero1 - $numero2;
    }

    public function multiplicar(float $numero1, float $numero2): float
    {
        return $numero1 * $numero2;
    }

    public function dividir(float $numero1, float $numero2): float
    {
        if ($numero2 == 0) {
            throw new InvalidArgumentException('Não é possível dividir por zero.');
        }

        return $numero1 / $numero2;
    }
}
