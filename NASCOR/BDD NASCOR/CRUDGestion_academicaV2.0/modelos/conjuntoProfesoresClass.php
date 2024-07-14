<?php
require_once "profesorClass.php";
class conjuntoProfesores {
	public $profesores;
	public function __construct() {
		$data = file_get_contents("../datos/profesores.dat");
		$this->profesores = unserialize($data,['allowed_classes' => true]);
	}
/*	public function leerPersonas() {
		foreach ($this->personas as $clave => $per) {
			echo '<a href="borrarPersona.php?posicion='.$clave.'">Borrar</a> | ';
			echo '<a href="modificar1Persona.php?posicion='.$clave.'">Modificar</a><br>';	
			$per->mostrarDatos();		
		}
	}*/
	public function borrarProfesor($pos) {
		unset($this->profesores[$pos]);
		$this->guardarProfesores();
	}
	public function anadirProfesor($profe) {
		$this->profesores[] = $profe;
		$this->guardarProfesores();		
	}
	public function modificarProfesor($pos,$profe) {
		$this->profesores[$pos] = $profe;
		$this->guardarProfesores();		
	}

	public function guardarProfesores() {
		$file= fopen("../datos/profesores.dat","w");
		fwrite($file,serialize($this->profesores));
		fclose($file);	
	}
}