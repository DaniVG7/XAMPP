<?php 
include '../../0comun/libreria.php';
cabecera('../../0comun/estilos.css','../CSS/anadirProfesor.css');
?>
<div>
<form action="../controladores/anadir2ProfesorControlador.php" method="post">
	<input type="text" name="nombre" placeholder= "Nombre: "><br>
	<input type="text" name="ape1" placeholder= "Primer apellido:"><br>
	<input type="text" name="ape2" placeholder= "Segundo apellido:"><br>
	<input type="text" name="ciudad" placeholder= "Ciudad: "><br>
	<input type="text" name="dni" placeholder= "DNI: "><br>	
	<select name="curso">
		<option value="#" selected disabled>Seleccione un curso</option>		
		<?php
		foreach ($listaCursos->cursos as $curso) {
			echo '<option value="'.$curso->getId().'">'.$curso->getNombre().'</option>';
		}
		?>
	</select><br>
	<input type="submit" name="boton" value="Añadir profesor">
</form>
</div>