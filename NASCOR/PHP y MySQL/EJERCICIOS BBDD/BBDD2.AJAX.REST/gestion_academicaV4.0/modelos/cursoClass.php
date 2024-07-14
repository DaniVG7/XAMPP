<?php
require_once 'connectClass.php';
class cursos extends connect {
	private $bd;
	public $cursos;
	
	public function __construct() {
		$this->bd=connect::conexion();	
		$this->leerCursos();
	}
	public function leerCursos() {
		$sql="SELECT GA_Curso.*,
				GA_Persona.nombre as nombreProfe,
        		GA_Persona.ape1 as ape1Profe,
        		GA_Persona.ape2 as ape2Profe,
        		GA_Aula.nombre as nombreAula
			FROM GA_Curso,GA_Persona,GA_Aula
			WHERE GA_Curso.idProfesor=GA_Persona.idPersona
  			and GA_Curso.idAula=GA_Aula.idAula
		";
		$query = $this->bd->query($sql);
		while ($fila=$query->fetch_assoc()) {
			$this->cursos[] = $fila; 
		}
	}
	public function leerCursosSimple() {
		$sql="SELECT * FROM GA_Curso";
		$query = $this->bd->query($sql);
		while ($fila=$query->fetch_assoc()) {
			$cursosSimple[] = $fila; 
		}
		return $cursosSimple;
	}	
	public function leerCursosNoAlumno($idAlumno) {
		$sql="SELECT GA_Curso.*,
				GA_Persona.nombre as nombreProfe,
        		GA_Persona.ape1 as ape1Profe,
        		GA_Persona.ape2 as ape2Profe,
        		GA_Aula.nombre as nombreAula
			FROM GA_Curso,GA_Persona,GA_Aula
			WHERE GA_Curso.idProfesor=GA_Persona.idPersona
  			and GA_Curso.idAula=GA_Aula.idAula
            and GA_Curso.idCurso NOT IN (SELECT idCurso
										   FROM `GA_Alu_Curso`
										  WHERE idAlumno=".$idAlumno.")";
		$query = $this->bd->query($sql);
		$i=0;
			while ($fila=$query->fetch_assoc()) {
				$cursosNoMatriculados[] = $fila; 
				$i++;
			}
			if ($i>0) {
				return $cursosNoMatriculados;
			} else {
				return 0;
			}
	}	
	
	public function anadirCursoAlumno($curs,$idAlumno) {
		$sql="INSERT INTO `GA_Alu_Curso` (`idAluCurso`, `idAlumno`, `idCurso`) VALUES (NULL, '".$idAlumno."', '".$curs."')";
		$query = $this->bd->query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}
	public function borrarCursoAlumno($idAluCurso) {
		$sql="DELETE FROM GA_Alu_Curso WHERE `GA_Alu_Curso`.`idAluCurso` = $idAluCurso";
		$query = $this->bd->query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}		
	}
	public function anadirCurso($nombreCurso) {
		$sql="INSERT INTO `GA_Curso` (`idCurso`, `nombreCurso`, `fechaInicio`, `fechaFinal`, `idProfesor`, `numHoras`, `idAula`) 				VALUES (NULL, '$nombreCurso', NULL, NULL, NULL, NULL, NULL)";
		$query = $this->bd->query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}	
}