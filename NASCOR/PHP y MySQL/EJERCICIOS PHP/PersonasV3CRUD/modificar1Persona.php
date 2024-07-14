<?php
include '../comun/libreria.php';
cabecera('estilos.css','');
include 'personaClass.php';
$pos=$_GET['posicion'];
$data = file_get_contents("personas.dat");
$personas = unserialize($data, ['allowed_classes'=> true]);
$p=$personas[$pos];
//print_r($p);
?>

<form action="modificar2Persona.php" method="post">
	Nombre: <input type="text" name="nombre" value="<?php echo $p->getNombre() ?>"><br>
	Apellido 1: <input type="text" name="ape1" value="<?php echo $p->getApellido1() ?>"><br>
	Apellido 2: <input type="text" name="ape2" value="<?php echo $p->getApellido2() ?>"><br>
	Ciudad: <input type="text" name="ciudad" value="<?php echo $p->getCiudad() ?>"><br>
	DNI: <input type="text" name="dni" value="<?php echo $p->getDNI() ?>"><br>	
	<input type="hidden" name="pos" value="<?php echo $pos ?>">
	<input type="submit" name="boton" value="Modificar persona">
</form>

<?php
pie();
