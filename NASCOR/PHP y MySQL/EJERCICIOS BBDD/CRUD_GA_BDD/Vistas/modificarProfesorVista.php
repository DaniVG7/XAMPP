<?php
include '../../0comun/libreria.php';
cabecera('../formularios.css','');

?>
<main>
	<div class="formcurso">
	<h2 style="color:blue">Modificando datos de <?php echo $profesor['nombre'].' '.$profesor['ape1'].' '.$profesor['ape2']?></h2>
	<form action = "modificar2ProfesorControlador.php" method="post">
		<label><strong>Nombre: </strong></label><input type="text" name="nombre" value="<?php echo $profesor['nombre']; ?>"><br>
		<label><strong>Primer apellido: </strong></label><input type="text" name="ape1" value="<?php echo $profesor['ape1']; ?>"><br>
		<label><strong>Segundo apellido: </strong></label><input type="text" name="ape2" value="<?php echo $profesor['ape2']; ?>"><br>
		<label><strong>DNI:</strong></label><input type="text" name="DNI" value="<?php echo $profesor['DNI']; ?>"><br>
		<input type="hidden" name="idProfesor" value= "<?php echo $_GET['idProfesor'];?>">
		<input type="submit" name="boton" value="Modificar datos">
	</form>
	</div>
</main>
<?php
pie('');