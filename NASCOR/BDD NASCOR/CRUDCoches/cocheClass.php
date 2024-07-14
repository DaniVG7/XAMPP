<?php
class Coche {
	public $marca;
	public $modelo;
	public $ano;
	private $extras;
	public $potencia;
	
	function __construct($marca,$modelo,$ano,$ext,$pot) {
		$this->marca=$marca;
		$this->modelo=$modelo;
		$this->ano=$ano;
		$this->extras=$ext;
		$this->potencia=$pot;
	}
	
	public function getMarca() {
		return $this->marca;
	}
	public function getModelo() {
		return $this->modelo;
	}
	public function getAno() {
		return $this->ano;
	}	
	public function getExtras() {
		return $this->extras;
	}	
	public function getPotencia() {
		return $this->potencia;
	}	
	public function setMarca($marca) {
		$this->marca=$marca;
	}	
	public function setModelo($modelo) {
		$this->modelo=$modelo;
	}	
	public function setAno($ano) {
		$this->ano=$ano;
	}	
	public function setExtras($ext) {
		$this->extras=$ext;
	}		
	public function setPotencia($pot) {
		$this->potencia=$pot;
	}	
	public function mostrarDatos() {
		echo $this->modeloOficial();
		echo $this->getExtras().'<br>';	
		echo $this->potencia.'<br>';
		echo '<hr>';	
	}
	private function modeloOficial() {
		return $this->marca.' '.$this->modelo.', '.$this->ano.'<br>';
	}
}

?>