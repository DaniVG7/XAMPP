<?php
include 'cocheClass.php';
$data = file_get_contents("coches.dat");
$coches = unserialize($data, ['allowed_classes'=> true]); //descargar el array que contiene el archivo coches.dat en la variable coches


$p=$coche = new Coche ($_POST['marca'],$_POST['modelo'],$_POST['año'],$_POST['extras'],$_POST['potencia']); //hacemos que $p sea un coche nuevo. 

$coches[$_POST['pos']] = $p; //Con esto Cambiamos los datos a los nuevos datos introducidos que será un nuevo coche, se crea un objeto nuevo.

$file= fopen("coches.dat","w");
fwrite($file,serialize($coches));
fclose($file);
header('Location: verCoches.php');
?>