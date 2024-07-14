<?php

namespace Test\Application;
use PHPUnit\Framework\TestCase;
use Application\CalculadoraClass;
use TypeError;

require_once 'src/CalculadoraClass.php';

class CalculadoraTest extends TestCase
{
    public function testSumarPositivos()
    {
        $calculadora = new CalculadoraClass();
        $resultado = $calculadora->sumar(3, 5);
        $this->assertEquals(8, $resultado);
    }

    public function testSumarNegativos()
    {
        $calculadora = new CalculadoraClass();
        $resultado = $calculadora->sumar(-2, -4);
        $this->assertEquals(-6, $resultado);
    }

    public function testSumarDecimales()
    {
        $calculadora = new CalculadoraClass();
        $resultado = $calculadora->sumar(2.5, 3.5);
        $this->assertEquals(6.0, $resultado);
    }

    public function testSumarCero()
    {
        $calculadora = new CalculadoraClass();
        $resultado = $calculadora->sumar(0, 0);
        $this->assertEquals(0, $resultado);
    }

    public function testSumarPositivoYNegativo()
    {
        $calculadora = new CalculadoraClass();
        $resultado = $calculadora->sumar(10, -3);
        $this->assertEquals(7, $resultado);
    }
	public function testSumarError()
    {
        $this->expectException(TypeError::class);

        $calculadora = new CalculadoraClass();
        // Pasamos un string en lugar de un número, lo cual dará un error.
        $resultado = $calculadora->sumar('error', 5);
    }
    
}
