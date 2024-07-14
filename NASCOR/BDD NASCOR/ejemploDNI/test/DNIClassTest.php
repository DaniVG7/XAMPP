<?php
namespace Test;
use PHPUnit\Framework\TestCase;
use Application\DNIClass;

class DNIClassTest extends TestCase {

  private $dniClass;

  protected function setUp(): void {
    $this->dniClass = new DNIClass();
  }

  public function testCalculateLetterForValidDNI() {
    $this->assertEquals('Z', $this->dniClass->calcularLetra('12345678'));
    $this->assertEquals('M', $this->dniClass->calcularLetra('98765432'));
	$this->assertEquals('H', $this->dniClass->calcularLetra('11111111'));
	$this->assertEquals('R', $this->dniClass->calcularLetra('99999999'));
	$this->assertEquals('R', $this->dniClass->calcularLetra('00000001'));
	$this->assertEquals('X', $this->dniClass->calcularLetra('87654321'));
	$this->assertEquals(false, $this->dniClass->calcularLetra('00000000'));
  }

  public function testCalculateLetterForInvalidDNILength() {
    $this->expectException(\InvalidArgumentException::class);
    $this->dniClass->calcularLetra('1234');
  }

  public function testCalculateLetterForNonNumericDNI() {
    $this->expectException(\InvalidArgumentException::class);
    $this->dniClass->calcularLetra('A1234567');
  }

  protected function tearDown(): void {
    unset($this->dniClass);
  }
}
