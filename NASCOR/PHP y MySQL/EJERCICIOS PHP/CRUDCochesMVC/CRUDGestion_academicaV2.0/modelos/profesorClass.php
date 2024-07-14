<?php
include 'personaClass.php';
class Profesor extends Persona {
	public $curso;
	function __construct($nom,$ap1,$ap2,$ciudad,$dni,$curso) {
		parent::__construct($nom,$ap1,$ap2,$dni,$ciudad);
		$this->curso=$curso;
	}
	function getCurso() {
		return $this->curso;
	}

	function setCurso($curso) {
		$this->curso=$curso;
	} 	
	function mostrarDatos() {
		parent::mostrarDatos();
		echo $this->getCurso().'<br>';
				
	}
}