<?php
require_once "cursoClass.php";
require_once "conjuntoAlumnosClass.php";
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
		$cursoAntiguo = $this->cursos[$pos]->getId();
		//echo $cursoAntiguo;
		$this->cursos[$pos] = $curso;
		$alumnos = new conjuntoAlumnos();
		$alumnos->cambiarCursos($cursoAntiguo,$curso->getId());
		$this->guardarCursos();	
		$alumnos->guardarAlumnos();
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