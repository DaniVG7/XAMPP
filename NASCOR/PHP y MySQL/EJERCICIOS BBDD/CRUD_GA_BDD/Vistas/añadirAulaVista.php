<?php
include '../../0comun/libreria.php';
cabecera('../formularios.css','');

?>
<main>
	<h2 style="color:black">Añadir Aula</h2>
<div class="formcurso">
<form action="añadir2AulaControlador.php" method="post">
	<label><strong>Nombre del aula:</strong></label><input type="text" name="nombre"><br>
	<input type="submit" name="boton" value="Añadir Aula">
</form>
</div>
</main>

<?php
pie('');
?>