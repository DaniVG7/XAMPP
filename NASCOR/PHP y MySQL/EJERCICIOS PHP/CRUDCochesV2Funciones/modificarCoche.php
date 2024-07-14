<?php
include '../0comun/libreria.php';
cabecera('coches.css');
include 'conjuntoCochesClass.php';
$coches = new conjuntoCoches();
$posicionURL = $_GET['posicion']; // con esto cogemos el numero de la posicion de la url
$posAModificar = $coches->coches[$posicionURL]; //con esto cogemos la posicion de la persona en cuestion que queremos modificar.
//print_r($p);
?>

<form action="modificarCoche2.php" method="post">
	<div><input type="text" required name="marca" value="<?php echo $posAModificar->getMarca() ?>"><br>  <!-- ahora el value de cada input del formulario será el nombre de cada posicion (esto se hace para que salgan los datos directamente en el input cuando cargamos la pagina  -->
	<input type="text" required name="modelo" value="<?php echo $posAModificar->getModelo() ?>"><br>
	<input type="text" required name="año" value="<?php echo $posAModificar->getAno() ?>"><br>
	<input type="text" name="extras" value="<?php echo $posAModificar->getExtras() ?>"><br>
	<input type="text" required name="potencia" value="<?php echo $posAModificar->getPotencia() ?>"><br>	
	<input type="hidden" name="pos" value="<?php echo $posicionURL ?>"> <!-- Campo oculto con el valor de la posicion a modificar -->
	<input type="submit" name="boton" value="Modificar Vehículo">
</form>
	</div>
<?php
pie('');
				   
?>
				