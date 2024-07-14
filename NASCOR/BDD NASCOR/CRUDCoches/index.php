<?php
include '../0comun/libreria.php';
cabecera('coches.css','');
?>
<a href="verCoches.php"><button><strong>Nuestros coches</strong></button></a>
<hr>
<div class="Formulario">
<form action="añadirCoche.php" method="post">
	 <input type="text" name="marca" placeholder='Marca:'><br>
	<input type="text" name="modelo" placeholder= 'Modelo:' ><br>
	<input type="text" name="año" placeholder='Año:'><br>
	<input type="text" name="extras" placeholder ='Extras:'><br>
	<input type="text" name="potencia" placeholder='Potencia:'><br>	
	<input type="submit" name="boton" value="Añadir coche">
</form>
</div>

<?php
pie('');

?>
