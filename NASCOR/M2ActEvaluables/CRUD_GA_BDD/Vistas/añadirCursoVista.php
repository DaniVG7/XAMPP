<?php
include '../../0comun/libreria.php';
cabecera('../formularios.css','');

?>
<h2 style="color:black">Añadir Curso</h2>
<main>
	<div class="formcurso">
<form action="añadir2CursoControlador.php" method="post">
	(Los campos con <strong style="color:red">*</strong> son obligatorios)<br><br>
	
	<label>(<strong style="color:red">*</strong>)Nombre curso : </label><input type="text" name="nombreCurso" required><br>
	<label>Fecha Inicio: </label><input type="date" name="fechaInicio"><br>
	<label>Fecha Final: </label><input type="date" name="fechaFinal"><br>
	<label>(<strong style="color:red">*</strong>)Número de horas: </label><input type="number" name="numHoras" required><br>
	<label>(<strong style="color:red">*</strong>)Profesor:</label><select name="idProfesor" required>
	<option selected disabled value="" >Añada un profesor</option>
    	<?php 
        	foreach ($profesores->profesores as $profesor) {
            echo '<option value="' . $profesor['idProfesor'] . '">' . $profesor['nombreProfesor'] . ' ' . $profesor['apellido1Profesor'] . ' ' . $profesor['apellido2Profesor'] . '</option>';
        }
    ?>
</select><br>
	<label>(<strong style="color:red">*</strong>) Aula:</label><select name="idAula" required>
	<option selected disabled value="" >Añada un aula</option>
	<?php 
        	foreach ($aulas->aulas as $aula) {
            echo '<option value="' . $aula['idAula'] . '">' . $aula['nombre']. ' </option>';
        }
    ?>
</select><br>
	
	<input type= "submit" value="Añadir curso">

</form>
		</div>
</main>
<?php
pie("");
