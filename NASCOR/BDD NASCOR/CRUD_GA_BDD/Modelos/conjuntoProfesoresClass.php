<?php
require_once "connectClass.php";
class conjuntoProfesores extends connect{
	private $bd;
	public $profesores;
	public function __construct() {
		$this->bd=connect::conexion();	
		$this->leerProfesores();
	}
	public function leerProfesores() {
		$sql="SELECT GA_Profesor.*,
				Profe.nombre as nombreProfesor, 
				Profe.ape1 as apellido1Profesor, 
				Profe.ape2 as apellido2Profesor,
				Profe.DNI as DNI
			  FROM GA_Profesor, GA_Persona as Profe 
			  WHERE GA_Profesor.idProfesor = Profe.idPersona;
				";
		$query = $this->bd->query($sql);
		while ($fila=$query->fetch_assoc()) {  
			$this->profesores[] = $fila; 
		}
	}
	
	
	public function leerProfesor($idProfesor) {
	$sql="SELECT GA_Persona.nombre,
       				 GA_Persona.ape1,
       				 GA_Persona.ape2,
       				 GA_Persona.DNI,
					 GA_Persona.idPersona
				FROM GA_Persona, GA_Profesor
				WHERE GA_Profesor.idProfesor=GA_Persona.idPersona
				  and GA_Profesor.idProfesor=".$idProfesor;
		
		$query = $this->bd->query($sql);
		if ($fila=$query->fetch_assoc()) {
			return $fila; 
		}
		
	}
	
	public function añadirProfesor($nombre, $ap1, $ap2, $DNI) {
    $sql = "INSERT INTO GA_Persona (idPersona, nombre, ape1, ape2, DNI) 
            VALUES (NULL, '" . $nombre . "','" . $ap1 . "','" . $ap2 . "','" . $DNI . "')";
    $query = $this->bd->query($sql);

    $idPersonaInsertada = $this->bd->insert_id;

    $sql = "INSERT INTO `GA_Profesor` (idProfesor) 
            VALUES ('".$idPersonaInsertada."')";
    $query = $this->bd->query($sql);

    }
	
	public function borrarProfesor($idProfesor) {
		$sql = "DELETE FROM GA_Profesor
				WHERE `GA_Profesor`.`idProfesor` = $idProfesor";
		$query = $this->bd->query($sql);
		$sql = "DELETE FROM GA_Persona
				WHERE `GA_Persona`.`idPersona` = $idProfesor";
		$query = $this->bd->query($sql);
		
	}
	
	public function modificarProfesor($idProfesor, $nombre,$apellido1,$apellido2,$DNI){		
		$sql = "UPDATE `GA_Persona` SET `nombre` = '$nombre',
								   `ape1` = '$apellido1',
								   `ape2` = '$apellido2',
								   `DNI` = '$DNI'
				 WHERE `GA_Persona`.`idPersona` = $idProfesor";		
		$query = $this->bd->query($sql);
	}
	
	public function consultaCursos($idProfesor){
		$sql = "SELECT GA_Profesor.*
				FROM   GA_Curso,
					   GA_Profesor
				WHERE  GA_Curso.idProfesor = GA_Profesor.idProfesor
                AND    GA_Profesor.idProfesor = $idProfesor";
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
	
}
