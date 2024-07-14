<?php
require_once "connectClass.php";
class conjuntoAlumnos extends connect{
	private $bd;
	public $alumnos;
	public function __construct() {
		$this->bd=connect::conexion();	
		$this->leerAlumnos();
	}
	public function leerAlumnos() {
		$sql="SELECT GA_Alumno.*,
				Alumnos.nombre as nombreAlumno,
				Alumnos.ape1 as apellido1Alumno,
				Alumnos.ape2 as apellido2Alumno,
				Alumnos.DNI as DNI
				/*GA_Curso.nombreCurso as curso*/

			FROM GA_Alumno,
				GA_Persona as Alumnos
				/*GA_Curso,
				GA_Alu_Curso*/ 

			WHERE GA_Alumno.idAlumno = Alumnos.idPersona
				/*AND GA_Alu_Curso.idAlumno = GA_Alumno.idAlumno
				AND GA_Alu_Curso.idCurso = GA_Curso.idCurso*/";
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
	
		
	public function consultaCursos($idAlumno){
		$sql = "SELECT GA_Alu_Curso.*,
				GA_Curso.nombreCurso
				FROM GA_Alu_Curso,
				GA_Curso
				WHERE idAlumno = ".$idAlumno."
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
		// Consulta SQL para eliminar un alumno por su ID
        $sql="DELETE FROM GA_Alu_Curso WHERE `GA_Alu_Curso`.`idAlumno` = $idAlumno"; //primero borramos la relacion alumno-curso.
		$query = $this->bd->query($sql);
		$sql="DELETE FROM GA_Alumno WHERE GA_Alumno.idAlumno = $idAlumno"; // luego borramos el id alumno
		$query = $this->bd->query($sql);
		$sql="DELETE FROM GA_Persona WHERE GA_Persona.idPersona = $idAlumno"; // por último borramos la persona que tenia el mismo id alumno.
		$query = $this->bd->query($sql);		
	}
	
	
	public function modificarAlumno($idAlumno,$nombre,$apellido1,$apellido2,$DNI,$estudios){
		$sql = "UPDATE `GA_Alumno` SET `estudios` = '$estudios'
					WHERE `GA_Alumno`.`idAlumno` = $idAlumno";
		$query = $this->bd->query($sql);		
		$sql = "UPDATE `GA_Persona` SET `nombre` = '$nombre',
								   `ape1` = '$apellido1',
								   `ape2` = '$apellido2',
								   `DNI` = '$DNI'
				 WHERE `GA_Persona`.`idPersona` = $idAlumno";		
		$query = $this->bd->query($sql);
	}
	
}