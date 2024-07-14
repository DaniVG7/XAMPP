<!DOCTYPE html>
<html>
<head>
    <title>Actividad 14, Sesiones.</title>
</head>
<body>
	<h3>Ejercicio Sesiones</h3>
    <form method="post" action="nombre.php">
        <label for="nombre">Introduce tu nombre:</label>
        <input type="text" name="nombre" id="nombre">
        <input type="submit" value="Enviar">
    </form>
<?php
session_start();

$nombres = $_SESSION['nombres'] ?? array();

echo '<ul>';
foreach ($nombres as $nombre) {
	echo '<form method="post" action="borrar.php"><li><input type="radio" name="nombre_borrar" value="'.$nombre.'">'.$nombre.'</li>';
}
echo '</ul>';
echo '<input type="submit" value="Borrar"></form>';
?>
</body>
</html>