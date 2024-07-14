<?php
include '../../0comun/libreria.php';
cabecera('../estilos.css','');

?>
<a href="añadir1CursoControlador.php"><button>Añadir curso</button></a>  <a href="../index.php"><button>Gestionar Alumnos</button></a>       <a href="../Controladores/leerProfesoresControlador.php"><button>Gestionar Profesores</button></a> <a href="../Controladores/leerAulasControlador.php"><button>Gestionar Aulas</button></a>
<h2>Listado de Cursos</h2>
<hr><hr>
<?php
echo '<main>';

if(empty($listaCursos->cursos)){
	echo '<span style="color:red">No hay cursos disponibles en este momento</span>';
}else{
		foreach ($listaCursos->cursos as $curso ) {
			echo '<div class="cursos">';
			echo '<strong> Curso de '.$curso['nombreCurso'].'</strong></br>';
			echo '<strong>Profesor: </strong>'.$curso['nombreProfesor'].' '.$curso['ape1Profesor'].' '.$curso['ape2Profesor'].'</br>';
			echo '<strong>Aula: </strong>'.$curso['nombreAula'].'<br>';
			echo '<strong>Fecha de inicio: </strong>'.$curso['fechaInicio'].'<br>';
			echo '<strong>Fecha de finalización: </strong>'.$curso['fechaFinal'].'<br>';
			echo '<strong>Duración: </strong>'.$curso['numHoras'].' horas<br>';
			echo '<a href="borrarCursoControlador.php?idCurso='.$curso['idCurso'].'"><button>Borrar</button></a>  ';
			echo '<a href="modificar1CursoControlador.php?idCurso='.$curso['idCurso'].'"><button>Modificar</button></a> ';	
			echo '</div>';
		}
}
echo '</main>';

pie('');
?>
