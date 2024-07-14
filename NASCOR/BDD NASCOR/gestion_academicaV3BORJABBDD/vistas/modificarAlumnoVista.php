<form action="modificar2AlumnoControlador.php" method="post">
	Nombre: <input type="text" name="nombre" value="<?php echo $alu['nombre']; ?>"><br>
	Apellido 1: <input type="text" name="ape1" value="<?php echo $alu['ape1']; ?>"><br>
	Apellido 2: <input type="text" name="ape2" value="<?php echo $alu['ape2']; ?>"><br>
	DNI: <input type="text" name="dni" value="<?php echo $alu['DNI']; ?>"><br>	
	Nivel de estudios: <input type="text" name="nivel" value="<?php echo $alu['estudios'] ?>"><br>
	<input type="hidden" name="idAlumno" value="<?php echo $_GET['posicion']?>">
	<input type="submit" name="boton" value="Modificar Alumno">
</form>


