<?php
include '../0comun/libreria.php';
cabecera('');
?>
<a href="leerPersonas.php"><button><strong>Listado de personas</strong></button></a>
<hr>
<div class="Formulario">
<form action="anadirPersona.php" method="post">
	 <input type="text" name="nombre" placeholder='Nombre:'><br>
	<input type="text" name="ape1" placeholder= 'Primer Apellido:' ><br>
	<input type="text" name="ape2" placeholder='Segundo apellido:'><br>
	<input type="text" name="ciudad" placeholder ='Ciudad:'><br>
	<input type="text" name="dni" placeholder='Numero de DNI'><br>	
	<input type="submit" name="boton" value="Añadir persona">
</form>
</div>

<?php
pie('');

?>
