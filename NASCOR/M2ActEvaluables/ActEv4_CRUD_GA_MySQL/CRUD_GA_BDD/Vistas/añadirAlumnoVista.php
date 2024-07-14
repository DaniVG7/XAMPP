<?php
include '../../0comun/libreria.php';
cabecera('../formularios.css','');

?>
<main>
	<h2 style="color:black">Añadir alumno</h2>
<div class="formcurso">
<form action="añadir2AlumnoControlador.php" method="post">
	<label><strong>Nombre:</strong></label><input type="text" name="nombre"><br>
	<label><strong>Primer Apellido:</strong></label><input type="text" name="ap1"><br>
	<label><strong>Segundo Apellido:</strong></label><input type="text" name="ap2"><br>
	<label><strong>DNI:</strong></label><input type="text" name="DNI"><br>
	<label><strong>Estudios:</strong></label><input type="text" name="estudios"><br>
	<label><strong>Cursos disponibles:</strong></label> <br>
<?php
foreach ($listaCursos->cursos as $curso) {
		
    	echo '<input type="checkbox" name="cursos[]" value="'.$curso['idCurso'].'">'.$curso["nombreCurso"].'<br>';
	}
?>
	<input type="submit" name="boton" value="Añadir Alumno">
</form>
</div>
</main>

<?php
pie('');
?>