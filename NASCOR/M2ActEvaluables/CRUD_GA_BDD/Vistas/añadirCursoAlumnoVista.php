<?php
include '../../0comun/libreria.php';
cabecera('../formularios.css','');

?>
<h2 style="color:black">Añadir cursos</h2>
<main>
<div class="formcurso">
<form action="../Controladores/añadir2CursoAlumnoControlador.php" method="post">
	<label><strong>Nombre:</strong></label><input type="text" disabled name="nombre" value="<?php echo $alumno['nombre']; ?>"><br>
	<label><strong>Primer Apellido:</strong></label><input type="text" disabled name="ap1" value="<?php echo $alumno['ape1']; ?>" ><br>
	<label><strong>Segundo Apellido:</strong></label><input type="text" disabled name="ap2" value="<?php echo $alumno['ape2']; ?>"><br>
	<label><strong>DNI:</strong></label><input type="text" name="DNI" disabled value="<?php echo $alumno['DNI']; ?>"><br>
	<label><strong>Estudios:</strong></label><input type="text" disabled name="estudios" value="<?php echo $alumno['estudios']; ?>"><br>
	<label><strong>Cursos disponibles:</strong></label> <br>
<?php
	//cambiar listaCursos por listaCursos no matriculados y ponerle el isset por si no hubiesen más cursos disponibles para la matricula.
	
if ($listaCursosNoMatriculados!=0){		
foreach ($listaCursosNoMatriculados as $curso) {
    	echo '<input type="checkbox" name="cursos[]" value="'.$curso['idCurso'].'">'.$curso["nombreCurso"].'<br>';
	}
	echo '<input type="hidden" name="idAlumno" value="'.$alumno["idAlumno"].'">';
	echo '<input type="submit" name="boton" value="Añadir Cursos">';
	echo '</form>';
} else{
	echo '<strong style="color:red">No hay cursos disponibles para este alumno. </strong>';
}

echo'</form></main>';

pie('');

	