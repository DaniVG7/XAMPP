<?php
include '../0comun/libreria.php';
cabecera('estilos.css','');
include 'personaClass.php';
$pos=$_GET['posicion']; // con esto cogemos el numero de la posicion de la url
$data = file_get_contents("personas.datos");
$personas = unserialize($data, ['allowed_classes'=> true]);
$p=$personas[$pos]; //con esto cogemos la posicion de la persona en cuestion que queremos modificar.
//print_r($p);
?>

<form action="modificar2Persona.php" method="post">
	<div><input type="text" name="nombre" value="<?php echo $p->getNombre() ?>"><br>  <!-- ahora el value de cada input del formulario será el nombre de cada posicion (esto se hace para que salgan los datos directamente en el input cuando cargamos la pagina  -->
	<input type="text" name="ape1" value="<?php echo $p->getApellido1() ?>"><br>
	<input type="text" name="ape2" value="<?php echo $p->getApellido2() ?>"><br>
	<input type="text" name="ciudad" value="<?php echo $p->getCiudad() ?>"><br>
	<input type="text" name="dni" value="<?php echo $p->getDNI() ?>"><br>	
	<input type="hidden" name="pos" value="<?php echo $pos ?>"> <!-- Campo oculto con el valor de la posicion a modificar -->
	<input type="submit" name="boton" value="Modificar persona">
</form>
	</div>
<?php
pie('');
				   
?>
				
