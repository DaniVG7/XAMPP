<?php
include 'personaClass.php';
require_once 'conjuntoCursosClass.php';
class Alumno extends Persona {
	public $curso;
	public $nivel_estudios;
	function __construct($nom,$ap1,$ap2,$ciudad,$dni,$curs,$nivel) {
		parent::__construct($nom,$ap1,$ap2,$dni,$ciudad);
		$this->curso=$curs;
		$this->nivel_estudios=$nivel;
	}
	function getCurso() {
		return $this->curso;
	}
	function getNivel() {
		return $this->nivel_estudios;
	}
	function setCurso($curso) {
		$this->curso=$curso;
	} 	
	function setNivel($nivel) {
		$this->nivel_estudios=$nivel;
	} 
	function mostrarDatos() {
		$listaCursos = new conjuntoCursos();
		parent::mostrarDatos();
		//echo $this->getCurso().'<br>';
		echo '<a href="listaAlumnosCursoControlador.php?id='.$this->getCurso().'">';
		echo $listaCursos->buscarNombre($this->getCurso()).'</a><br>';
		echo $this->getNivel().'<br>';				
	}
}