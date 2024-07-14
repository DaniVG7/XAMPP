<?php
header('Content-type: application/xml; charset=utf-8');

// Conexión a la base de datos (reemplaza con tus propios valores)
$cnx = new mysqli("localhost", "nascor04", "Nasc0r2020!", "nascor04_bddCurso");
$cnx->set_charset("utf-8");

// Verificar la conexión
if ($cnx->connect_error) {
    die("Error de conexión a la base de datos: " . $cnx->connect_error);
}

// Iniciar el documento XML
$txt = '<?xml version="1.0" encoding="utf-8"?>' . PHP_EOL;
$txt .= '<plantas>' . PHP_EOL;

// Consulta SQL para obtener los datos de la tabla 'plantas'
$query = "SELECT * FROM Plantas_Plantas";
$resultado = $cnx->query($query);

if ($resultado) {
    while ($registro = $resultado->fetch_assoc()) {
        $txt .= "\t<planta>" . PHP_EOL;
        $txt .= "\t\t<nombre_cientifico>" . $registro['Nombre_cientifico'] . "</nombre_cientifico>" . PHP_EOL;
        $txt .= "\t\t<nombre_comun>" . $registro['Nombre_comun'] . "</nombre_comun>" . PHP_EOL;
        $txt .= "\t\t<descripcion>" . $registro['Descripcion'] . "</descripcion>" . PHP_EOL;
        $txt .= "\t\t<id_ubicacion>" . $registro['id_ubicacion'] . "</id_ubicacion>" . PHP_EOL;
        $txt .= "\t\t<stock>" . $registro['stock'] . "</stock>" . PHP_EOL;

        // Agrega más campos según la estructura de tu tabla

        $txt .= "\t</planta>" . PHP_EOL;
    }

    // Liberar el resultado
    $resultado->free();
} else {
    echo "Error en la consulta: " . $cnx->error;
}

// Cerrar el documento XML
$txt .= '</plantas>' . PHP_EOL;

// Cerrar la conexión a la base de datos
$cnx->close();

// Imprimir el contenido XML en el navegador
echo $txt;
?>
