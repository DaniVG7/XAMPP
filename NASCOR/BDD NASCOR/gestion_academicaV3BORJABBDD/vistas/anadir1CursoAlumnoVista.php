<?php
echo $alu['nombre'].' '.$alu['ape1'].' '.$alu['ape2'].'<hr>';

if ($listaNoMatriculados!=0) {
	echo '<form action="anadir2CursoAlumnoControlador.php" method="post">';
	echo '<input type="hidden" name="idAlumno" value="'.$alu['idAlumno'].'">';
	foreach ($listaNoMatriculados as $curs) {
		echo '<input type="checkbox" name="cursos[]" value="'.$curs['idCurso'].'">'.$curs['nombreCurso'].'<br>';
	}
	echo '<input type="submit" value="Añadir cursos">';
	echo '</form>';
} else {
	echo 'No hay cursos dispobibles para la matricula';
}
