
<form action="modificar2AlumnoControlador.php" method="post">
	Nombre: <input type="text" name="nombre" value="<?php echo $posAModificar->getNombre() ?>"><br>
	Apellido 1: <input type="text" name="ape1" value="<?php echo $posAModificar->getApellido1() ?>"><br>
	Apellido 2: <input type="text" name="ape2" value="<?php echo $posAModificar->getApellido2() ?>"><br>
	
	Ciudad: <input type="text" name="ciudad" value="<?php echo $posAModificar->getCiudad() ?>"><br>
	DNI: <input type="text" name="dni" value="<?php echo $posAModificar->getDNI() ?>"><br>	
	Curso: <select name="curso">
				<option value="PHP"<?php if ($posAModificar->getCurso() == "PHP") { echo " selected"; } ?>>Curso PHP</option>
				<option value="WEB"<?php if ($posAModificar->getCurso() == "WEB") { echo " selected"; } ?>>Curso Web</option>
		   </select><br>
	Nivel de estudios: <input type="text" name="nivel" value="<?php echo $posAModificar->getNivel() ?>"><br>
	<input type="hidden" name="pos" value="<?php echo $posicionAlumno ?>">
	<input type="submit" name="boton" value="Modificar datos">
</form>