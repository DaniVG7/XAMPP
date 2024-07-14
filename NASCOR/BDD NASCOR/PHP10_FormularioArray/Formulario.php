<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<pre>
	<?php 
        // print_r($_POST['persona']); //  array 'persona'

        $personas = $_POST['persona'];


        foreach ($personas as $array => $persona) {
            echo "Datos del Usuario ".($array + 1).":<br>";
            echo "Nombre: ".$persona['nombre']."<br>";
            echo "Apellido1: ".$persona['apellido1']."<br>";
            echo "Apellido2: ".$persona['apellido2']."<br>";
            echo "Edad: ".$persona['edad']."<br><hr>";
        }
	?>
</pre>
</body>
</html>

