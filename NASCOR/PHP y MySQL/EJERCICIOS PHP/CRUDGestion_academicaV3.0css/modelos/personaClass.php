<?php
class Persona {
	public $nombre;
	public $apellido1;
	public $apellido2;
	private $DNI;
	public $ciudad;
	
	function __construct($nom,$cognom1,$cognom2,$dni,$ciutat) {
		$this->nombre=$nom;
		$this->apellido1=$cognom1;
		$this->apellido2=$cognom2;
		$this->DNI=$dni;
		$this->ciudad=$ciutat;
	}
	
	public function getNombre() {
		return $this->nombre;
	}
	public function getApellido1() {
		return $this->apellido1;
	}
	public function getApellido2() {
		return $this->apellido2;
	}	
	public function getDNI() {
		return $this->DNI;
	}	
	public function getCiudad() {
		return $this->ciudad;
	}	
	public function setNombre($nom) {
		$this->nombre=$nom;
	}	
	public function setApellido1($ape1) {
		$this->apellido1=$ape1;
	}	
	public function setApellido2($ape2) {
		$this->apellido2=$ape2;
	}	
	public function setCiudad($ciu) {
		$this->ciudad=$ciu;
	}		
	public function setDNI($dni) {
		$this->DNI=$dni;
	}	
	public function mostrarDatos() {
		echo "<strong>Nombre:</strong> ".$this->nombreOficial();
		echo "<strong>Ciudad:</strong> ".$this->ciudad.'<br>';
		echo "<strong>DNI:</strong> ".$this->getDNI().'<br>';		
	}
	private function nombreOficial() {
		return $this->apellido1.' '.$this->apellido2.', '.$this->nombre.'<br>';
	}
}