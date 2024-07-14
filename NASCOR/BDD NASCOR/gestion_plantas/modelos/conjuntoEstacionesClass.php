<?php
require_once 'connectClass.php';
class conjuntoEstaciones extends connect {
	private $bd;
	public $estaciones;
	
	public function __construct() {
		$this->bd=connect::conexion();	
		$this->leerEstaciones();
	}
	public function leerEstaciones() {
		$sql="SELECT Plantas_Estaciones.* FROM Plantas_Estaciones ";
		$query = $this->bd->query($sql);
		while ($fila=$query->fetch_assoc()) {
			$this->estaciones[] = $fila; 
		}
	}
	
}