<?php
require_once "cursoClass.php";
class conjuntoCursos {
	public $cursos;
		
	public function __construct() {
		$data = file_get_contents("../datos/cursos.dat");
		$this->cursos = unserialize($data,['allowed_classes' => true]);
	}
	public function borrarCurso($pos) {
		unset($this->cursos[$pos]);
		$this->guardarCursos();
	}
	public function anadirCurso($curso) {
		$this->cursos[] = $curso;
		$this->guardarCursos();		
	}
	public function modificarCurso($pos,$curso) {
		$this->cursos[$pos] = $curso;
		$this->guardarCursos();		
	}
	public function buscarNombre($codigo) {
		foreach ($this->cursos as $curso) {
			if ($curso->getId()==$codigo) {
				return $curso->getNombre();
			}
		}
	}
	public function guardarCursos() {
		$file= fopen("../datos/cursos.dat","w");
		fwrite($file,serialize($this->cursos));
		fclose($file);	
	}
}