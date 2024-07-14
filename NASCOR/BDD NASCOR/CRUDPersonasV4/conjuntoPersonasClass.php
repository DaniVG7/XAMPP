<?php
require_once "personaClass.php";
class conjuntoPersonas {
	public $personas;
		
	public function __construct() {
		$data = file_get_contents("personas.datos");
		$this->personas = unserialize($data,['allowed_classes' => true]);
	}
	public function leerPersonas() {
		foreach ($this->personas as $clave => $per) {
			echo '<a href="borrarPersona.php?posicion='.$clave.'">Borrar</a> | ';
			echo '<a href="modificar1Persona.php?posicion='.$clave.'">Modificar</a><br>';	
			$per->mostrarDatos();		
		}
	}
	public function borrarPersona($pos) {
		unset($this->personas[$pos]);
		$this->guardarPersonas();
	}
	public function anadirPersona($per) {
		$this->personas[] = $per;
		$this->guardarPersonas();		
	}
	public function modificarPersona($pos,$per) {
		$this->personas[$pos] = $per;
		$this->guardarPersonas();		
	}
	public function guardarPersonas() {
		$file= fopen("personas.datos","w");
		fwrite($file,serialize($this->personas));
		fclose($file);	
	}
}