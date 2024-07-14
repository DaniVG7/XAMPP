<?php
session_start();

$nombreBorrar = $_POST['nombre_borrar'];

$eliminarNombre = array_search($nombreBorrar, $_SESSION['nombres']);
unset($_SESSION['nombres'][$eliminarNombre]);

header('Location: index.php');
exit();

?>
