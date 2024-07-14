<?php
require_once "alumnoClass.php";
class conjuntoAlumnos {
	public $alumnos;
		
	public function __construct() {
		$data = file_get_contents("../datos/alumnos.dat");
		$this->alumnos = unserialize($data,['allowed_classes' => true]);
	}
/*	public function leerPersonas() {
		foreach ($this->personas as $clave => $per) {
			echo '<a href="borrarPersona.php?posicion='.$clave.'">Borrar</a> | ';
			echo '<a href="modificar1Persona.php?posicion='.$clave.'">Modificar</a><br>';	
			$per->mostrarDatos();		
		}
	}*/
	public function borrarAlumno($pos) {
		unset($this->alumnos[$pos]);
		$this->guardarAlumnos();
	}
	public function anadirAlumno($per) {
		$this->alumnos[] = $per;
		$this->guardarAlumnos();		
	}
	public function modificarAlumno($pos,$per) {
		$this->alumnos[$pos] = $per;
		$this->guardarAlumnos();		
	}
	public function guardarAlumnos() {
		$file= fopen("../datos/alumnos.dat","w");
		fwrite($file,serialize($this->alumnos));
		fclose($file);	
	}
}