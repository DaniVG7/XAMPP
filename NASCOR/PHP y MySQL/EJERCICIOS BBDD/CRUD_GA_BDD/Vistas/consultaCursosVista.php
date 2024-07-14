<?php

include '../../0comun/libreria.php';
cabecera('../cursos.css','');

echo'
<a href="añadir1CursoAlumnoControlador.php?idAlumno='.$alumno['idAlumno'].'"><button>Añadir curso</button></a>  <a href="../index.php"><button>Gestionar Alumnos</button></a>  <a href="leerProfesoresControlador.php"><button>Gestionar Profesores</button></a>  
<a href="../Controladores/leerAulasControlador.php"><button>Gestionar Aulas</button></a>';

echo '<h2>Listado de Cursos Matriculados de '.$alumno["nombre"].' '.$alumno["ape1"].' '.$alumno["ape2"].'</h2>';
echo'<main>';
if($listaCursos){
	foreach ($listaCursos as $curso ) {
		echo '<div class="curso">';	
		echo '<strong>Identificador: </strong>'.$curso['idCurso'].' ==>  <strong>Nombre del curso: </strong>'.$curso['nombreCurso'];
		echo '<a href="borrarCursoAlumnoControlador.php?idAluCurso='.$curso['idAluCurso'].'&idAlumno='.$alumno['idAlumno'].'"><button>Borrar matrícula</button></a>';
		echo '</div>';
	}
}else{
	echo '<strong style="color:red">'.$alumno["nombre"].' '.$alumno['ape1'].' '.$alumno['ape2'].' no dispone de matrícula en ninguno de los cursos.</strong>';
}
;

echo '</main>';
pie('');

?>
