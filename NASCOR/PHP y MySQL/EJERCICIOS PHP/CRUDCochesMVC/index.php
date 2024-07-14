<?php  
include '../0comun/libreria.php';
cabecera('coches.css ', '../../0comun/estilos.css');
echo '<a href="controladores/añadirCocheControlador.php"><button>Añadir vehículo</button></a><hr>';
header ('Location: controladores/verCochesControlador.php'); 

pie("");
?>
