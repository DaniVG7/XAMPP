<?php
require_once 'connectClass.php';
class conjuntoAlumnos extends connect {
	private $bd;
	public $alumnos;
	
	public function __construct() {
		$this->bd=connect::conexion();	
		$this->leerAlumnos();
	}
	public function leerAlumnos() {
		$sql="SELECT GA_Persona.nombre,
       				 GA_Persona.ape1,
       				 GA_Persona.ape2,
       				 GA_Persona.DNI,
       				 GA_Alumno.estudios,
       				 /*GA_Curso.nombreCurso,*/
					 GA_Alumno.idAlumno
				FROM GA_Alumno,GA_Persona/*,GA_Alu_Curso,GA_Curso */
				WHERE GA_Alumno.idAlumno=GA_Persona.idPersona
				  /*and GA_Alumno.idAlumno=GA_Alu_Curso.idAlumno
				  and GA_Alu_Curso.idCurso=GA_Curso.idCurso;*/";
		$query = $this->bd->query($sql);
		while ($fila=$query->fetch_assoc()) {
			$this->alumnos[] = $fila; 
		}
	}
	public function leerAlumno($idAlumno) {
		$sql="SELECT GA_Persona.nombre,
       				 GA_Persona.ape1,
       				 GA_Persona.ape2,
       				 GA_Persona.DNI,
       				 GA_Alumno.estudios,
       				 /*GA_Curso.nombreCurso,*/
					 GA_Alumno.idAlumno
				FROM GA_Alumno,GA_Persona/*,GA_Alu_Curso,GA_Curso */
				WHERE GA_Alumno.idAlumno=GA_Persona.idPersona
				  /*and GA_Alumno.idAlumno=GA_Alu_Curso.idAlumno
				  and GA_Alu_Curso.idCurso=GA_Curso.idCurso;*/
				  and GA_Alumno.idAlumno=".$idAlumno;
		$query = $this->bd->query($sql);
		if ($fila=$query->fetch_assoc()) {
			return $fila; 
		}
	}	
	public function anadirAlumno($nombre,$ape1,$ape2,$dni,$nivel) {
		$sql="INSERT INTO `GA_Persona` (`idPersona`, `nombre`, `ape1`, `ape2`, `DNI`) 
		                        VALUES (NULL, '".$nombre."', '".$ape1."', '".$ape2."', '".$dni."')";
		$query = $this->bd->query($sql);
		if (!$query) {return false;}
		$sql="INSERT INTO `GA_Alumno` (`idAlumno`, `estudios`) VALUES ('".$this->bd->insert_id."', '".$nivel."')"; 
		$query = $this->bd->query($sql);
		if ($query) {return true;} else {return false;}
	}
	public function consultaCursos($idAlumno) {
		$sql="SELECT GA_Alu_Curso.*,GA_Curso.nombreCurso
			FROM GA_Alu_Curso,GA_Curso
			WHERE idAlumno=".$idAlumno."
			  AND GA_Curso.idCurso=GA_Alu_Curso.idCurso";
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
	public function borrarAlumno($idAlumno) {
		$sql="DELETE FROM GA_Alu_Curso WHERE `GA_Alu_Curso`.`idAlumno` = $idAlumno";
		$query = $this->bd->query($sql);
		$sql="DELETE FROM GA_Alumno WHERE GA_Alumno.idAlumno = $idAlumno";
		$query = $this->bd->query($sql);
		$sql="DELETE FROM GA_Persona WHERE GA_Persona.idPersona = $idAlumno";
		$query = $this->bd->query($sql);		
	}
	public function modificarAlumno($idAlumno,$nombre,$ape1,$ape2,$dni,$nivel) {
		$sql="UPDATE `GA_Alumno` SET `estudios` = '$nivel' 
      			WHERE `GA_Alumno`.`idAlumno` = $idAlumno";
		$query = $this->bd->query($sql);
		$sql="UPDATE `GA_Persona` SET `nombre` = '$nombre', 
							  `ape1` = '$ape1', 
							  `ape2` = '$ape2', 
							  `DNI` = '$dni' 
	  			WHERE `GA_Persona`.`idPersona` = $idAlumno; ";
		$query = $this->bd->query($sql);
	}

}