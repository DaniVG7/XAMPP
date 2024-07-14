<?php
require_once 'connectClass.php';
class conjuntoPersonas extends connect {
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
	public function leerPersona($id) {
		$sql="select * from GA_Persona WHERE idPersona=".$id;
		$query = $this->bd->query($sql);
		if ($fila=$query->fetch_assoc()) {
			return $fila; 
		} else {
			return 0;
		}
	}	
	
	public function anadirPersona($nombre,$ape1,$ape2,$dni) {
		$sql="INSERT INTO `GA_Persona` (`idPersona`, `nombre`, `ape1`, `ape2`, `DNI`)
              VALUES (NULL, '".$nombre."', '".$ape1."', '".$ape2."', '".$dni."')";
		$query = $this->bd->query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}
	public function borrarPersona($id) {
		$sql="DELETE FROM GA_Persona WHERE `GA_Persona`.`idPersona` = ".$id;
		$query = $this->bd->query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}
	public function modificarPersona($pos,$nombre,$ape1,$ape2,$DNI) {
		$sql="UPDATE `GA_Persona` 
				SET `nombre` = '".$nombre."',
    				`ape1` = '".$ape1."',
    				`ape2` = '".$ape2."',
    				`DNI` = '".$DNI."' 
				WHERE `GA_Persona`.`idPersona` =".$pos;
		$query = $this->bd->query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}	


}  