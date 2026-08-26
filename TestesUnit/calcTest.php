<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../Calculadora.php';

class CalculadoraTest extends TestCase
{
    private Calculadora $calculadora;

    protected function setUp(): void
    {
        $this->calculadora = new Calculadora();
    }

    public function testSomar(): void
    {
        $resultado = $this->calculadora->somar(10, 25);

        $this->assertSame(35.0, $resultado);
    }

    public function testSubtrair(): void
    {
        $resultado = $this->calculadora->subtrair(25, 10);

        $this->assertSame(15.0, $resultado);
    }

    public function testMultiplicar(): void
    {
        $resultado = $this->calculadora->multiplicar(5, 4);

        $this->assertSame(20.0, $resultado);
    }

    public function testDividir(): void
    {
        $resultado = $this->calculadora->dividir(20, 5);

        $this->assertSame(4.0, $resultado);
    }

    public function testDivisaoPorZero(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->calculadora->dividir(10, 0);
    }
}
