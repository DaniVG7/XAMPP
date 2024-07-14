<?php
include '../../0comun/libreria.php';
cabecera('../formularios.css','');

?>
<main>
<div class="formcurso">
<h2 style="color:blue">Está modificando los datos del curso de <?php echo $curso['nombreCurso'] ?> </h2>

<form action = "modificar2CursoControlador.php" method="post">	
	<label><strong>Nombre del curso:  </strong></label><input type="text" name="nombreCurso" value="<?php echo $curso['nombreCurso']; ?>" required><br>
	<label><strong>Fecha de inicio:  </strong></label><input type="date" name="fechaInicio" value="<?php echo $curso['fechaInicio']; ?>"><br>
	<label><strong>Fecha de finalización:  </strong></label><input type="date" name="fechaFinal" value="<?php echo $curso['fechaFinal']; ?>"><br>
	<label><strong>Número de horas:  </strong></label><input type="number" name="numHoras" value="<?php echo $curso['numHoras']; ?>"required><br>
	<label><strong>Personal docente:  </strong></label><select name="idProfesor" required>
		<option selected disabled value="">Seleccione un profesor</option>
    	<?php 
        	foreach ($profesores->profesores as $profesor) {
            echo '<option value="' . $profesor['idProfesor'] . '">' . $profesor['nombreProfesor'] . ' ' . $profesor['apellido1Profesor'] . ' ' . $profesor['apellido2Profesor'] . '</option>';
        }
    ?>
</select>Profesor actual: <?php echo $curso['nombreProfesor'] . ' ' . $curso['ape1Profesor'] . ' ' . $curso['ape2Profesor'] ?><br><br>
	<label><strong>Aulas accesibles: </strong></label><select required name="idAula">
	<option selected disabled value="">Seleccione un aula</option>
    	<?php 
        	foreach ($aulas->aulas as $aula) {
            echo '<option value="' . $aula['idAula'] . '">' . $aula['nombre'].'</option>';
        }
    ?>
	</select>Aula actual: <?php echo $curso['nombreAula'] ?><br>
	
	<input type="hidden" name="idCurso" value= "<?php echo $_GET['idCurso'];?>">
	<input type="submit" name="boton" value="Modificar curso">
	
</form>
</div>
</main>
<?php
pie('');