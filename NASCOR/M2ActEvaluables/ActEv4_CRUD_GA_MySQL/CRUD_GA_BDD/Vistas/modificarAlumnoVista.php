<?php
include '../../0comun/libreria.php';
cabecera('../formularios.css','');

?>
<main>
	<div class="formcurso">
	<?php 
		echo' <h2 style="color:blue">Modificando los datos de '.$alumno['nombre'].' '.$alumno['ape1'].' '.$alumno['ape2'].'</h2>';
		?>
	<form action = "modificar2AlumnoControlador.php" method="post">
		<label><strong>Nombre: </strong></label><input type="text" name="nombre" value="<?php echo $alumno['nombre']; ?>"><br>
		<label><strong>Primer apellido: </strong></label><input type="text" name="ape1" value="<?php echo $alumno['ape1']; ?>"><br>
		<label><strong>Segundo apellido: </strong></label><input type="text" name="ape2" value="<?php echo $alumno['ape2']; ?>"><br>
		<label><strong>DNI:</strong></label><input type="text" name="DNI" value="<?php echo $alumno['DNI']; ?>"><br>
		<label><strong>Nivel de estudios: </strong></label><input type="text" name="estudios" value="<?php echo $alumno['estudios']; ?>"><br>
		<input type="hidden" name="idAlumno" value= "<?php echo $_GET['posicion'];?>">
		<input type="submit" name="boton" value="Modificar datos">
	</form>
	</div>
</main>
<?php
pie('');