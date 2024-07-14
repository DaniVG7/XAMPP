<?php 
include '../../0comun/libreria.php';
cabecera('../../0comun/estilos.css','../CSS/modificarProfesor.css');
?>
<div>
<form action="modificar2ProfesorControlador.php" method="post">
	<label>Nombre:</label><input type="text" name="nombre" value="<?php echo $profe->getNombre(); ?>"><br>
	<label>Apellido 1:</label><input type="text" name="ape1" value="<?php echo $profe->getApellido1(); ?>"><br>
	<label>Apellido 2:</label><input type="text" name="ape2" value="<?php echo $profe->getApellido2(); ?>"><br>
	<label>Ciudad:</label><input type="text" name="ciudad" value="<?php echo $profe->getCiudad(); ?>"><br>
	<label>DNI:</label><input type="text" name="dni" value="<?php echo $profe->getDNI(); ?>"><br>	
	<label>Curso impartido:</label><select name="curso">
			<?php
				foreach ($listaCursos->cursos as $curso) {
					echo '<option value="'.$curso->getId().'"';
					if ($profe->getCurso()==$curso->getId()) { echo 'selected';} 
					echo '>'.$curso->getNombre().'</option>';
				}
			?>	
			</select><br>
	<input type="hidden" name="posicion" value="<?php echo $_GET['posicion']?>">
	<input type="submit" name="boton" value="Modificar profesor">
</form>


