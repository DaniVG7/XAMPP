<?php
require_once "connectClass.php";
class conjuntoCursos extends connect{
	private $bd;
	public $cursos;
		
	public function __construct() {
		$this->bd=connect::conexion();
		$this->leerCursos();
	}
	public function leerCursos() {
		$sql="SELECT GA_Curso.*,
                   Profesor.nombre as nombreProfesor,
                   Profesor.ape1 as ape1Profesor,
                   Profesor.ape2 as ape2Profesor,
                   GA_Aula.nombre as nombreAula
             FROM  GA_Curso, GA_Persona as Profesor, GA_Aula, GA_Profesor
             WHERE 
                  GA_Curso.idProfesor = GA_Profesor.idProfesor
                  AND GA_Profesor.idProfesor = Profesor.idPersona
                  AND GA_Curso.idAula = GA_Aula.idAula ;";
		
		$query = $this->bd->query($sql);
		while ($fila=$query->fetch_assoc()) {  
			$this->cursos[] = $fila; 
		}
	}
	
	public function leerCurso($idCurso) {
		$sql="SELECT GA_Curso.*,
                   Profesor.nombre as nombreProfesor,
                   Profesor.ape1 as ape1Profesor,
                   Profesor.ape2 as ape2Profesor,
                   GA_Aula.nombre as nombreAula
             FROM  GA_Curso, GA_Persona as Profesor, GA_Aula, GA_Profesor
             WHERE 
                  GA_Curso.idProfesor = GA_Profesor.idProfesor
                  AND GA_Profesor.idProfesor = Profesor.idPersona
                  AND GA_Curso.idAula = GA_Aula.idAula 
                  AND GA_Curso.idCurso = $idCurso
		
		;";
		$query = $this->bd->query($sql);
		if ($fila=$query->fetch_assoc()) {
			return $fila; 
		}
	}
	
	
	public function leerCursosNoMatriculados($idAlumno){
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
	
	public function añadirCursoAlumno($curso, $idAlumno){
	
	$sql = "INSERT INTO GA_Alu_Curso (idAluCurso, idAlumno, idCurso)
        VALUES (NULL, " . $idAlumno . ", " . $curso . ")";
		$query = $this->bd->query($sql);
		if ($query){
		return true; 
		}else{
		return false;
		}
	}
	
	public function añadirAlumno($nombre, $ap1, $ap2, $DNI, $estudios, $cursosSeleccionados) {
    $sql = "INSERT INTO GA_Persona (idPersona, nombre, ape1, ape2, DNI) 
            VALUES (NULL, '" . $nombre . "','" . $ap1 . "','" . $ap2 . "','" . $DNI . "')";
    $query = $this->bd->query($sql);

    $idPersonaInsertada = $this->bd->insert_id;

    $sql = "INSERT INTO `GA_Alumno` (idAlumno, estudios) 
            VALUES ('".$idPersonaInsertada."', '" . $estudios . "')";
    $query = $this->bd->query($sql);

    // Inserta relaciones entre el Alumno y los Cursos en la tabla de relación GA_Alu_Curso
    foreach ($cursosSeleccionados as $idCurso) {
        $sql = "INSERT INTO GA_Alu_Curso (idAluCurso, idAlumno, idCurso) 
                VALUES (NULL, '" . $idPersonaInsertada . "', '" . $idCurso . "')";
        $query = $this->bd->query($sql);
   		 }
	}
	
	
	public function borrarCursoAlumno($idAluCurso){
		$sql= "DELETE FROM GA_Alu_Curso WHERE `GA_Alu_Curso`.`idAluCurso` = $idAluCurso";
		$query = $this->bd->query($sql);
		if ($query){
			return true;
		}else{
			return false;
		}
	}
	
	//------------------------------------------------------------------------------------------------------------------------
	public function añadirCurso($idCurso, $nombreCurso, $fechaInicio, $fechaFinal, $numHoras, $idAula, $idProfesor) {
	if (isset($fechaInicio)) {
		$fechaInicio = "'" . $fechaInicio . "'";
	} else {
		$fechaInicio = "NULL";
	}

	if (isset($fechaFinal)) {
		$fechaFinal = "'" . $fechaFinal . "'"; //??Aqui son necesarias al ser una primera inserción en el INSERT el NULL siempre va entre ''
	} else {
		$fechaFinal = "NULL";
	}
		
    $sql = "INSERT INTO `GA_Curso` (`idCurso`, `nombreCurso`, `fechaInicio`, `fechaFinal`, `numHoras`, `idAula`, `idProfesor`) 
            VALUES (NULL, '$nombreCurso', $fechaInicio, $fechaFinal, '$numHoras', '$idAula', '$idProfesor');";

    $query = $this->bd->query($sql);
}

	public function borrarCurso($idCurso){
	
	$sql="DELETE FROM GA_Alu_Curso WHERE `GA_Alu_Curso`.`idCurso` = $idCurso"; //primero borramos la relacion alumno-curso.
	$query = $this->bd->query($sql);
		
	$sql= "DELETE FROM GA_Curso WHERE `GA_Curso`.`idCurso` = $idCurso"; //ahora podemos borrar el curso
	$query = $this->bd->query($sql);
	}
	

	//--------------------------------------------------------------------------------------------------------------------
	public function modificarCurso($idCurso, $nombreCurso, $fechaInicio, $fechaFinal, $numHoras, $idProfesor, $idAula){
		if (isset($fechaInicio)) {
		$fechaInicio = "'" .$fechaInicio. "'" ;
		} else {
			$fechaInicio = "NULL";
		}

		if (isset($fechaFinal)) {
			$fechaFinal = "'". $fechaFinal."'" ;//???Aqui no es necesario poner comillas ya que al ya estar en la base de datos ya lo detecta como NULL
		} else {						// Es decir, en un UPDATE SET el NULL no necesita ir entre comillas.
			$fechaFinal = "NULL";
		}
		$sql = "	UPDATE `GA_Curso` SET `nombreCurso` = '$nombreCurso',
											`fechaInicio` = $fechaInicio,
											`fechaFinal` = $fechaFinal,
											`numHoras` = '$numHoras',
											`idAula` = '$idAula',
											`idProfesor` = '$idProfesor'
					WHERE `GA_Curso`.`idCurso` = $idCurso;";
				
		$query = $this->bd->query($sql);
		
	}
}