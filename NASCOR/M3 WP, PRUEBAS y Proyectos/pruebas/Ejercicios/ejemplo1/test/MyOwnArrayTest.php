<?php
namespace Test;
use PHPUnit\Framework\TestCase;
use Application\MyOwnArray;

class MyOwnArrayTest extends TestCase {

  private $myOwnArray;

  protected function setUp(): void{
	//PREPARACION
	//setUp es un método ejecutado antes de cada test, para inicializar las variables y el entorno en un estado conocido.
    $this->myOwnArray = new MyOwnArray();
  }

  public function testNewArrayIsEmpty(){
	//ACTUAR Y AFIRMAR
	//asserEquals comprueba que el valor esperado corresponde al que indicamos
    $this->assertEquals(0, sizeof($this->myOwnArray->getMyArray()));
  }

  public function testArrayContainsAnElement(){
	//ACTUAR
    $this->myOwnArray->addElementToMyArray("elemento1");
    $this->myOwnArray->addElementToMyArray("elemento2");	  
	//AFIRMAR
    $this->assertEquals(2, sizeof($this->myOwnArray->getMyArray()));
  }

  protected function tearDown(): void{
	//LIMPIEZA
	//tearDown es ejecutado después de cada test, pasen o falle, para limpiar las variables inicializadas
    unset($this->myOwnArray);
  }

}