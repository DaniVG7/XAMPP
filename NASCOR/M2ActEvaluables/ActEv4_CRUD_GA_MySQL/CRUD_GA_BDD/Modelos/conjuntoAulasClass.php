<?php
require_once "connectClass.php";
class conjuntoAulas extends connect{
	private $bd;
	public $aulas;
	public function __construct() {
		$this->bd=connect::conexion();	
		$this->leerAulas();
	}
	public function leerAulas() {
		$sql="SELECT * FROM `GA_Aula`";
		$query = $this->bd->query($sql);
		while ($fila=$query->fetch_assoc()) {  
			$this->aulas[] = $fila; 
		}
	}
	
	public function leerAula($idAula) {
    $sql = "SELECT GA_Aula.nombre
            FROM GA_Aula
            WHERE GA_Aula.idAula = " . $idAula;
    $query = $this->bd->query($sql);
    if ($fila = $query->fetch_assoc()) {
        return $fila; 
    }
}
	/*	public function leerAula($idAula) {
		$sql="SELECT GA_Aula.*
				FROM GA_Aula,GA_Curso
				WHERE GA_Aula.idAula=GA_Curso.idAula
				  and GA_Aula.idAula=".$idAula;
		$query = $this->bd->query($sql);
		if ($fila=$query->fetch_assoc()) {
			return $fila; 
		}*/

	
	public function añadirAula($nombre) {
    $sql = "INSERT INTO `GA_Aula` (`idAula`, `nombre`) 
			VALUES (NULL, '$nombre')";
   
		$query = $this->bd->query($sql);

    }
	
	public function borrarAula ($idAula){
	
	$sql = "DELETE FROM GA_Aula WHERE `GA_Aula`.`idAula` = $idAula";
	$query = $this->bd->query($sql);

	}
	
	
	public function consultaCursos($idAula){
		$sql = "SELECT GA_Aula.nombre,
					   GA_Curso.nombreCurso,
					   GA_Curso.idCurso
				FROM   GA_Aula,
					   GA_Curso
				WHERE  GA_Curso.idAula = GA_Aula.idAula
                AND    GA_Aula.idAula = $idAula";
		$query = $this->bd->query($sql);
		while ($fila=$query->fetch_assoc()) {  
			$listaCursos[] = $fila; 
		}
		if (isset($listaCursos)) {
			return $listaCursos;
		} else {
			return false;
		}		
	}
	
	public function modificarAula($idAula, $nombreAula){
		$sql = "UPDATE `GA_Aula` SET `nombre` = '$nombreAula' WHERE `GA_Aula`.`idAula` = $idAula";
			$query = $this->bd->query($sql);
	}
	
}


