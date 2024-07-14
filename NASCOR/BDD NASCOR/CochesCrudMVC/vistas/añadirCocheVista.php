<?php  
include '../../0comun/libreria.php';
cabecera('../coches.css', '../../0comun/estilos.css');
?>
<a href="../index.php"><button><strong>Nuestros coches</strong></button></a>
<hr>
<div class="Formulario">
<form action="añadirCoche2Controlador.php" method="post">
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