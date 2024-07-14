<?php 
include '../../0comun/libreria.php';
cabecera('../../0comun/estilos.css','../CSS/modificarAlumno.css');
?>
<div>
<form action="modificar2AlumnoControlador.php" method="post">
	<label>Nombre:</label><input type="text" name="nombre" value="<?php echo $alu->getNombre(); ?>"><br>
	<label>Apellido 1:</label><input type="text" name="ape1" value="<?php echo $alu->getApellido1(); ?>"><br>
	<label>Apellido 2:</label><input type="text" name="ape2" value="<?php echo $alu->getApellido2(); ?>"><br>
	<label>Ciudad:</label><input type="text" name="ciudad" value="<?php echo $alu->getCiudad(); ?>"><br>
	<label>DNI:</label><input type="text" name="dni" value="<?php echo $alu->getDNI(); ?>"><br>	
	<label>Curso:</label><select name="curso">
			<?php
				foreach ($listaCursos->cursos as $curso) {
					echo '<option value="'.$curso->getId().'"';
					if ($alu->getCurso()==$curso->getId()) { echo 'selected';} 
					echo '>'.$curso->getNombre().'</option>';
				}
			?>	
			</select><br>
	<label>Nivel de estudios:</label><input type="text" name="nivel" value="<?php echo $alu->getNivel(); ?>"><br>
	<input type="hidden" name="posicion" value="<?php echo $_GET['posicion']?>">
	<input type="submit" name="boton" value="Modificar alumno">
</form>
</div>
<?php
pie("");
?>



