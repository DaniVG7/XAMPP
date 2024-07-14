<?php  //clase conjuntoCoches con las funciones para aplicar 
require_once "cocheClass.php";
class conjuntoCoches {
	public $coches;
		
	public function __construct() {
		$data = file_get_contents("../datos/coches.dat");  //si file_get_contents falla devolvera un false por lo que tiene que haber contenido en él.
		$this->coches = unserialize($data,['allowed_classes' => true]); //Si devuelve False, estaremos en que $data sera false y sera un booleano y nos dará error la página.
	}
	public function borrarCoche($pos) {
		unset($this->coches[$pos]);
		$this->guardarCoches();
	}
	public function anadirCoche($coche) {
		$this->coches[] = $coche;
		$this->guardarCoches();		
	}
	public function modificarCoche($pos,$coche) {
		$this->coches[$pos] = $coche;
		$this->guardarCoches();		
	}
	public function guardarCoches() {
		$file= fopen("../datos/coches.dat","w");
		fwrite($file,serialize($this->coches));
		fclose($file);	
	}
}