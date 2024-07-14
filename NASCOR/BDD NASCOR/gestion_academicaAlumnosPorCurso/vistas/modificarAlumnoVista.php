<form action="modificar2AlumnoControlador.php" method="post">
	Nombre: <input type="text" name="nombre" value="<?php echo $alu->getNombre(); ?>"><br>
	Apellido 1: <input type="text" name="ape1" value="<?php echo $alu->getApellido1(); ?>"><br>
	Apellido 2: <input type="text" name="ape2" value="<?php echo $alu->getApellido2(); ?>"><br>
	Ciudad: <input type="text" name="ciudad" value="<?php echo $alu->getCiudad(); ?>"><br>
	DNI: <input type="text" name="dni" value="<?php echo $alu->getDNI(); ?>"><br>	
	Curso: <select name="curso">
			<?php
				foreach ($listaCursos->cursos as $curso) {
					echo '<option value="'.$curso->getId().'"';
					if ($alu->getCurso()==$curso->getId()) { echo 'selected';} 
					echo '>'.$curso->getNombre().'</option>';
				}
			?>	
			</select><br>
	Nivel de estudios: <input type="text" name="nivel" value="<?php echo $alu->getNivel(); ?>"><br>
	<input type="hidden" name="posicion" value="<?php echo $_GET['posicion']?>">
	<input type="submit" name="boton" value="Modificar persona">
</form>


