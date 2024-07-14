<?php
include '../0comun/libreria.php';
cabecera("personas.css");

echo '<div><a href="leerPersonas.php"><button class="btn1">Acceder al listado de personas</button></a></div>';
echo '<div><a href="index.php"><button class="btn2">Añadir otra persona</button></a></div>';

// Verificar si el archivo JSON existe
if (file_exists('personas.json')) {
    $personas = json_decode(file_get_contents('personas.json'), true);
} else {
    // Si el archivo no existe, inicializa $personas como un array vacío
    $personas = array();
}

echo '<pre>';
//print_r($_POST);

$persona = array(
    'Nombre' => $_POST['nombre'],
    'Apellido1' => $_POST['apellido1'],
    'Apellido2' => $_POST['apellido2'],
    'Ciudad' => $_POST['ciudad'],
    'Imagen' => '' // Valor predeterminado en caso de que no se haya subido ningún archivo
);

if (isset($_FILES['añadirArchivo']) && $_FILES['añadirArchivo']['error'] === UPLOAD_ERR_OK) {
    // Obtenemos detalles del archivo subido
    $fileTmpPath = $_FILES['añadirArchivo']['tmp_name']; // Dirección donde se guarda el archivo
    $fileName = $_FILES['añadirArchivo']['name']; // Nombre del archivo
    $fileSize = $_FILES['añadirArchivo']['size']; // Tamaño
    $fileType = $_FILES['añadirArchivo']['type']; // Tipo de archivo

    $fileNameCmps = explode(".", $fileName); // Separamos el nombre del archivo por puntos
    $fileExtension = strtolower(end($fileNameCmps)); // Obtenemos la extensión del archivo
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc', 'xlsx', 'docx');
    
    if (in_array($fileExtension, $allowedfileExtensions)) {
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension; // Generamos un nuevo nombre de archivo
        $uploadFileDir = './archivos/'; // Carpeta donde se guardarán los archivos
        $dest_path = $uploadFileDir . $newFileName; // Ruta completa para guardar el archivo
        
        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            echo '<span style= "color:green"><strong>Archivo subido correctamente✅</strong></span><br>';
            // Si se sube un archivo con éxito, actualiza la clave "Imagen" en $persona
            $persona['Imagen'] = $newFileName;
        } else {
            echo '<span style= "color:red"><strong>❌No se pudo subir el archivo⚠️⚠️</strong></span><br>';
        }
    } else {
        echo "<span style= 'color:red'><strong>❌No se permiten cargar archivos .$fileExtension ⚠️⚠️</strong></span><br>";
    }
}

// Añadir la nueva persona al array de personas
$personas[] = $persona;

// Guardar el array actualizado en el archivo JSON
file_put_contents("personas.json", json_encode($personas));
echo '<ol>';
foreach ($personas as $per) {
	echo "<li><strong>Nombre y apellidos: </strong>".$per['Nombre'].' ';    echo $per['Apellido1'].' ';
    echo $per['Apellido2'].', ';
    echo "<strong>Ciudad: </strong>".$per['Ciudad'].'. ';
    echo '<br></li>';
}
echo '</ol>';
echo '</pre>';
pie("");
?>
