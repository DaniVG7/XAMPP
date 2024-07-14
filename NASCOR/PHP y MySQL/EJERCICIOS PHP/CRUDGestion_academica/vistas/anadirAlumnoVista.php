<form action="anadir2AlumnoControlador.php" method="post">
	Nombre: <input type="text" name="nombre"><br>
	Apellido 1: <input type="text" name="ape1"><br>
	Apellido 2: <input type="text" name="ape2"><br>
	Ciudad: <input type="text" name="ciudad"><br>
	DNI: <input type="text" name="dni"><br>	
	Curso: <select name="curso">
				<option value="PHP">Curso PHP</option>
				<option value="WEB">Curso Web</option>
			</select><br>
	Nivel de estudios: <input type="text" name="nivel"><br>
	<input type="submit" name="boton" value="Añadir persona">
</form>