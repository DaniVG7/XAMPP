<?php  //Formulario para añadir los coches a nuestro archivo donde accederemos a añadirCoche2 al hacer submit.
include '../0comun/libreria.php';
cabecera('coches.css');
?>
<a href="index.php"><button><strong>Nuestros coches</strong></button></a>
<hr>
<div class="Formulario">
<form action="añadirCoche2.php" method="post">
	 <input type="text" name="marca" required placeholder='Marca:'><br>
	<input type="text" name="modelo" required placeholder= 'Modelo:' ><br>
	<input type="text" name="año" required placeholder='Año:'><br>
	<input type="text" name="extras" required placeholder ='Extras:'><br>
	<input type="text" name="potencia" rquired placeholder='Potencia:'><br>	
	<input type="submit" name="boton" required value="Añadir coche">
</form>
</div>

<?php
pie('');

?>
