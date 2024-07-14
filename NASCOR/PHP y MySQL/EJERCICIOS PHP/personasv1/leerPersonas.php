<?php
include '../0comun/libreria.php';
cabecera("personas.css");
echo '<div><a href="index.php"><button class="btn2">Añadir personas</button></a></div>';
$personas = json_decode(file_get_contents('personas.json'),true);

if ($personas == null){
	echo 'No hay datos actualmente';
}
else{
	echo'<ol>';
	foreach ($personas as $per) {
    echo "<li><strong>Nombre y apellidos:</strong>".$per['Nombre'].' ';
    echo $per['Apellido1'] . ' ';
    echo $per['Apellido2'] . ' ';
    echo "Ciudad: ".$per['Ciudad'].'. ';

    // Mostrar la imagen si existe
    if (isset($per['Imagen']) && !empty($per['Imagen'])) {
        $imagenPath = './archivos/' . $per['Imagen'];
        echo '<br>';
        echo "<img src= $imagenPath></li>";
    }else{
		echo '</li>';	
	}
    
    echo '<br>';
	}
}

pie("");
?>