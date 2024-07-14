<?php
function cabecera($estilo, $estilo2) {
echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio DVG</title>
    <link rel="stylesheet" href="../0comun/estilos.css">
    <link rel="stylesheet" href="estilos.css">';
if ($estilo!='') {	
	echo '<link rel="stylesheet" type="text/css" href="'.$estilo.'">';
	echo '<link rel="stylesheet" type="text/css" href="'.$estilo2.'">';
}

echo '</head>
<body>
    <div class="cabecera">
        <h1>Ejercicio realizado por Dani Vargas García</h1>
    </div>
';
}  

function pie($script) {
	echo '<div class="footer">
	<footer>
	<h3>©Nascor 2023.   Desarrollo de Aplicaciones Web.</h3>
	</footer>
	</div>
	<script src="javaScript.js"></script>';
	if ($script!='') {	
		echo '<script src="'.$script.'"></script>';
	}	
	echo'
	</body>
	</html>';

}