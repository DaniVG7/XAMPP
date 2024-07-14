<form action="modificar2PersonaControlador.php" method="post">
	Nombre: <input type="text" name="nombre" value="<?php echo $p['nombre'] ?>"><br>
	Apellido 1: <input type="text" name="ape1" value="<?php echo $p['ape1'] ?>"><br>
	Apellido 2: <input type="text" name="ape2" value="<?php echo $p['ape2'] ?>"><br>
	DNI: <input type="text" name="dni" value="<?php echo $p['DNI'] ?>"><br>	
	<input type="hidden" name="pos" value="<?php echo $idPersona ?>">
	<input type="submit" name="boton" value="Modificar persona">
</form>