<?php
session_start();

$nombre = $_POST['nombre'];

if($nombre != "") {
   $_SESSION['nombre'][] = $nombre;
   header("location:index.php");
}
else {
   echo 'Error en el nombre';
}
?>