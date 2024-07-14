<?php
require_once 'connectClass.php';
class conjuntoMarcas extends connect {
	private $bd;
	public $marcas;
	
	public function __construct() {
		$this->bd=connect::conexion();	
		$this->leerMarcas();
	}
	public function leerMarcas() {
		$sql="SELECT Plantas_Marcas.* FROM Plantas_Marcas ";
		$query = $this->bd->query($sql);
		while ($fila=$query->fetch_assoc()) {
			$this->marcas[] = $fila; 
		}
	}
	public function leerMarca($idMarca) {
		$sql="SELECT Plantas_Marcas.* 
				FROM Plantas_Marcas 
				WHERE Plantas_Marcas.id=$idMarca";
		$query = $this->bd->query($sql);
		if ($fila=$query->fetch_assoc()) {
			return $fila; 
		}
	}
	
	public function añadirMarca($nombre) {
		$sql="INSERT INTO `Plantas_Marcas` (`id`, `Nombre`)  
		VALUES (NULL, '$nombre')";
		$query = $this->bd->query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}
	
	public function borrarMarca($idMarca) {
		$sql="DELETE FROM `Plantas_Marcas` WHERE `Plantas_Marcas`.`id` = $idMarca ";
		$query = $this->bd->query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}			
	}
	public function modificarMarca($idMarca,$nombre) {
		$sql="UPDATE `Plantas_Marcas` SET `Nombre` = '$nombre' WHERE `Plantas_Marcas`.`id` = $idMarca;";
		$query = $this->bd->query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}		
	
	}

}





