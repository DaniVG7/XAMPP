<?php
require_once '../0comun/libreria.php';

// Incluye la biblioteca de dompdf
require_once '../../vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();


    // Obtén los datos del formulario
    $alumno = $_POST["alumno"];
	$nombreAlumno= $alumno['nombre'];

    // Crear el contenido HTML para el PDF
    $html = "<h1>Datos del alumno</h1>";
    $html .= "<strong>Nombre: </strong>" . $nombreAlumno . "<br>";
    $html .= "<h2>Notas de las actividades:</h2><br>";

    for ($i = 0; $i < count($alumno['actividad']); $i++) {
        $actividad = $alumno['actividad'][$i];
        $dia = $alumno['dia'][$i];
        $nota = $alumno['nota'][$i];

        $html .= "<strong>Actividad:</strong> $actividad, <strong>Día:</strong> $dia, <strong>Nota:</strong> $nota <br>";
    }
    $html .= "<br><br>";
    $html .= "<strong>Nota Actitud:</strong> " . $alumno['notaActitud'] . "<br>";
    $html .= "<h2>Lenguajes dominados:</h2>";
    foreach ($alumno['lenguaje'] as $lenguaje) {
        $html .= $lenguaje . "<br>";
    }

    // Cargar el contenido HTML en dompdf
    $dompdf->loadHtml($html);

    // Renderizar el PDF
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();

    // Enviar el PDF al navegador
    $dompdf->stream("formulario_alumno_$nombreAlumno");

?>

