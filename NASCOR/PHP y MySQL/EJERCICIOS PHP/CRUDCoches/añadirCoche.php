<?php 
include '../0comun/libreria.php';
require_once 'cocheClass.php';
cabecera('coches.css');
$data = file_get_contents("coches.dat"); // cogemos el archivo coches.dat
$coches = unserialize($data, ['allowed_clases'=> true]); //Lo desencripta ya que es un archivo encriptado (no se puede leer) y lo convierte en un array.

$coche = new Coche ($_POST['marca'],$_POST['modelo'],$_POST['año'],$_POST['extras'],$_POST['potencia']);

$coches[] = $coche;

foreach ($coches as $nuevoCoche){
	echo $nuevoCoche-> mostrarDatos();
} //Este realmente no es necesario ya que realmente queremos verlo en el archivo verCoches. [ver ultima linea].

//Guardas la informacion del nuevo coche que se ha añadido al array:
$file = fopen('coches.dat','w');  //abrimos el archivo coches.dat
fwrite($file,serialize($coches)); //escribimos en el archivo el array coches
fclose($file); //cerramos el archivo

header('Location: verCoches.php');
pie ('');

?>