<?php 
include '../0comun/libreria.php';
cabecera("");
?>
<pre>   
<?php
    $alumno = $_POST["alumno"]; //accedemos al array alumno
    //  print_r($_POST);
    echo "<h1>Datos del alumno</h1>";
    echo "<strong>Nombre: </strong>".$alumno['nombre']."<br>";
    echo "<h2>Notas de las actividades:</h2><br>";
    //  $cantidadActividades = count($alumno['actividad']);
    // Imprimir cada actividad, día y nota correspondientes
    for ($i = 0; $i < count($alumno['actividad']); $i++) {
        $actividad = $alumno['actividad'][$i];
        $dia = $alumno['dia'][$i];
        $nota = $alumno['nota'][$i];
        
        echo "<strong>Actividad:</strong> $actividad, <strong>Día:</strong> $dia, <strong>Nota:</strong> $nota <br>";
    }
    echo "<br><br>";
    echo "<strong>Nota Actitud:</strong> " . $alumno['notaActitud'] . "<br>";
    echo "<h2>Lenguajes dominados:</h2>";
    foreach ($alumno['lenguaje'] as $lenguaje) {
        echo $lenguaje . "<br>";
    }
?>
</pre>
<?php
pie("");
?>

