<?php 

include '../0comun/libreria.php';
cabecera("objetos.css",'');

echo '<div style= "background-color:white">
	<form action="mostrar.php" method="post">
		<input type="text" name="nombre" placeholder="Nombre">
		<input type="text" name="apellido1" placeholder="Primer apellido">
		<input type="text" name="apellido2" placeholder="Segundo apellido">
		<input type="text" name="ciudad" placeholder="Ciudad">
		<input type="text" name="dni" placeholder="Número de DNI">
		<input type="submit" value="mostrar datos">
	</form>
</div>';



pie("");
?>