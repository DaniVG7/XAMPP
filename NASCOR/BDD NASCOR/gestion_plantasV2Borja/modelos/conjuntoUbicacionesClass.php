<?php
require_once 'connectClass.php';
class Ubicaciones extends connect {
	private $bd;
	public $ubicaciones;
	
	public function __construct() {
		$this->bd=connect::conexion();	
		$this->leerUbicaciones();
	}
	public function leerUbicaciones() {
		$sql="SELECT * FROM Plantas_Ubicacion";
		$query = $this->bd->query($sql);
		while ($fila=$query->fetch_assoc()) {
			$this->ubicaciones[] = $fila; 
		}
	}
}