<?php
include '../0comun/libreria.php';
cabecera('');
?>
<a href="leerPersonas.php">Listado de personas</a>
<hr>
<form action="anadirPersona.php" method="post">
	Nombre: <input type="text" name="nombre"><br>
	Apellido 1: <input type="text" name="ape1"><br>
	Apellido 2: <input type="text" name="ape2"><br>
	Ciudad: <input type="text" name="ciudad"><br>
	DNI: <input type="text" name="dni"><br>	
	<input type="submit" name="boton" value="Añadir persona">
</form>

<?php
pie("");

