<?php
require_once 'connectClass.php';
class personas extends connect {
	private $bd;
	public $personas;
	
	public function __construct() {
		$this->bd=connect::conexion();	
		$this->leerPersonas();
	}
	public function leerPersonas() {
		$sql="select * from GA_Persona";
		$query = $this->bd->query($sql);
		while ($fila=$query->fetch_assoc()) {
			$this->personas[] = $fila; 
		}
	}

}  