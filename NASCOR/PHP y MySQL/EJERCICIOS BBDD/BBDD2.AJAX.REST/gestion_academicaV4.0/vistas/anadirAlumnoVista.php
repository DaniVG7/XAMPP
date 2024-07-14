<script src="../vistas/ga.js"></script>
<form action="anadir2AlumnoControlador.php" method="post">
	Nombre: <input type="text" name="nombre"><br>
	Apellido 1: <input type="text" name="ape1"><br>
	Apellido 2: <input type="text" name="ape2"><br>
	DNI: <input type="text" name="dni"><br>	
	Nivel de estudios: <input type="text" name="nivel"><br>
	Cursos: <select id="cursos" name="curso">
	<option value="0">Selecciona una opción</option>
	<?php
		foreach ($cursos['cursos'] as $valor) {
		echo '<option value="'.$valor['idCurso'].'">'.$valor['nombreCurso'].'</option>'; 
	}
	?>
	</select> <input type="button" id="anadirCurso" onclick="mostrarAnadirCurso();" value="Mostrar añadir curso">
	<br>
	<input type="submit" name="boton" value="Añadir persona">
</form>
<div id="zonaAnadir" style="display:none;">
		<form style="background-color:#ddd;border:2px solid black;">
			<h2> Añadir curso </h2>
			Nombre: <input type="text" id="nombre" name="nombre"><br>	
			<input type="button" value="Añadir curso" onclick="anadirCurso();">
		</form>
	</div>