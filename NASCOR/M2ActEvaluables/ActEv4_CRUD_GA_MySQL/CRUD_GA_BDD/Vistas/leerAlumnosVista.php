<?php 
include '../../0comun/libreria.php';
cabecera('../estilos.css','');
?>
<a href="añadir1AlumnoControlador.php"><button>Añadir alumno</button></a>  <a href="leerCursosControlador.php"><button>Gestionar Cursos</button></a>  <a href="leerProfesoresControlador.php"><button>Gestionar Profesores</button></a> <a href="leerAulasControlador.php"><button>Gestionar Aulas</button></a>
<h2>Listado de alumnos </h2>
<hr><hr>
<main>
<?php
	if(empty($alumnos->alumnos)){
	echo '<span style="color:red">No hay alumnos en este momento</span>';
	}else{
		foreach ($alumnos->alumnos as $alumno ) {
			echo '<div class="alumno">';
			echo '<a href="borrarAlumnoControlador.php?posicion='.$alumno['idAlumno'].'"><button>Borrar</button></a>  ';
			echo '<a href="modificar1AlumnoControlador.php?posicion='.$alumno['idAlumno'].'"><button>Modificar</button></a>  ';
			echo '<a href="consultaCursosAlumnoControlador.php?idAlumno='.$alumno['idAlumno'].'"><button>Consultar curso</button></a> <br>';
			echo '<strong>Nombre: </strong>'.$alumno['nombreAlumno'].'<br>';	
			echo '<strong>Primer Apellido: </strong>'.$alumno['apellido1Alumno'].'<br>';	
			echo '<strong>Segundo Apellido: </strong>'.$alumno['apellido2Alumno'].'<br>';	
			echo '<strong>DNI: </strong>'.$alumno['DNI'].'<br>';	
			echo '<strong>Estudios: </strong>'.$alumno['estudios'].'<br>';	
			echo '</div>';
		}
	}
echo'</main>';
pie("");
?>
	
