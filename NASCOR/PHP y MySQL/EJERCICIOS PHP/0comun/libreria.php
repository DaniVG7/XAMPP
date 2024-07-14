<?php
function cabecera($estilo) {
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio DVG</title>
    <link rel="stylesheet" href="../0comun/comun.css">
    <link rel="stylesheet" href="estilos.css">';
if ($estilo!='') {	
	echo '<link rel="stylesheet" type="text/css" href="'.$estilo.'">';
}

echo '</head>
<body>
    <div class="cabecera">
        <h2>Ejercicio realizado por Dani Vargas García</h2>
    </div>
';
}  

function pie($script) {
	echo '<div class="footer">
	<footer>
	©Nascor 2023.   Desarrollo de Aplicaciones Web.
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