<?php
include '../../0comun/libreria.php';
cabecera('../formularios.css','');

?>
<main>
	<div class="formcurso">
		<h2 style="color:blue">Modificando datos de <?php echo $aula['nombre']?></h2>
		<form action = "modificar2AulaControlador.php" method="post">
			<label><strong>Nombre del aula: </strong></label><input type="text" name="nombre" value="<?php echo $aula['nombre']; ?>"><br>
			<input type="hidden" name="idAula" value= "<?php echo $_GET['idAula'];?>">
			<input type="submit" name="boton" value="Modificar nombre">
		</form>
	</div>
</main>
<?php
pie('');