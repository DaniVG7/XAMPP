<?php
require_once 'connectClass.php';
require_once 'conjuntoEstacionesClass.php';
class Plantas extends connect {
	private $bd;
	public $plantas;
	
	public function __construct() {
		$this->bd=connect::conexion();	
		$this->leerPlantas();
	}
	public function leerPlantas() {
		$sql="SELECT Plantas_Plantas.*,Plantas_Ubicacion.Ubicacion 
				FROM Plantas_Plantas,Plantas_Ubicacion 
				WHERE Plantas_Plantas.id_ubicacion=Plantas_Ubicacion.id";
		$query = $this->bd->query($sql);
		while ($fila=$query->fetch_assoc()) {
			$this->plantas[] = $fila; 
		}
	}
	public function leerPlanta($id) {
		$sql="SELECT Plantas_Plantas.*,Plantas_Ubicacion.Ubicacion 
				FROM Plantas_Plantas,Plantas_Ubicacion 
				WHERE Plantas_Plantas.id_ubicacion=Plantas_Ubicacion.id AND Plantas_Plantas.id=$id";
		$query = $this->bd->query($sql);
		if ($fila=$query->fetch_assoc()) {
			return $fila; 
		}
	}	
	public function anadirPlantas($cientifico,$comun,$descripcion,$stock,$ubicacion) {
		$sql="INSERT INTO `Plantas_Plantas` (`id`, `Nombre_cientifico`, `Nombre_comun`, `Descripcion`, `id_ubicacion`, `stock`)                                          VALUES (NULL, '$cientifico', '$comun', '$descripcion', $ubicacion, $stock)";
		$query = $this->bd->query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}
	public function modificarPlantas($idPlanta,$cientifico,$comun,$descripcion,$stock,$ubicacion) {
		$sql="UPDATE `Plantas_Plantas` 
		        SET `Nombre_cientifico` = '$cientifico', `Nombre_comun` = '$comun', `Descripcion` = '$descripcion', `id_ubicacion` = $ubicacion, `stock` = $stock WHERE `Plantas_Plantas`.`id` = $idPlanta ";
		$query = $this->bd->query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}		
	
	}
	public function borrarPlanta($idPlanta) {
		$sql="DELETE FROM Plantas_Plantas WHERE `Plantas_Plantas`.`id` = $idPlanta ";
		$query = $this->bd->query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}			
	}
	
	public function leerInfoPlanta($idPlanta) {
    $sql = "SELECT* 
        FROM Plantas_Dosis_abono, Plantas_Marcas, Plantas_Floracion, Plantas_Estaciones, Plantas_Plantas
        WHERE Plantas_Dosis_abono.id_planta = $idPlanta
        AND Plantas_Dosis_abono.id_marca = Plantas_Marcas.id
        AND Plantas_Floracion.id_planta = $idPlanta
        AND Plantas_Estaciones.id = Plantas_Floracion.id_estacion
		AND Plantas_Plantas.id = $idPlanta";
    $query = $this->bd->query($sql);

    if ($query) {
        while ($fila = $query->fetch_assoc()) {
			return $fila;
        }

		}
	}
	
	public function leerFloracionPlanta($idPlanta) {
    $sql = "SELECT* 
        FROM  Plantas_Floracion, Plantas_Estaciones
        WHERE Plantas_Floracion.id_planta = $idPlanta
        AND Plantas_Estaciones.id = Plantas_Floracion.id_estacion;";
    $query = $this->bd->query($sql);

    if ($query) {
        $estaciones = array(); // Crear un arreglo para almacenar las estaciones

        while ($fila = $query->fetch_assoc()) {
            $estaciones[] = $fila['Estacion']; // Agregar solo la estación al arreglo
        }

        return $estaciones;
    } else {
        return false;
 		}
}


}
