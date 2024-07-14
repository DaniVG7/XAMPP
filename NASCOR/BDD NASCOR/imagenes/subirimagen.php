<?php
if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
    // Obtenemos detalles del archivo subido
    $fileTmpPath = $_FILES['imagen']['tmp_name'];
    $fileName = $_FILES['imagen']['name'];
    $fileSize = $_FILES['imagen']['size'];
    $fileType = $_FILES['imagen']['type'];

    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    $allowedfileExtensions = array('jpg', 'gif', 'png');

    if (in_array($fileExtension, $allowedfileExtensions)) {
        // Carpeta de destino para la imagen original
        $uploadFileDirOriginal = './imagenes/';
        $dest_path_original = $uploadFileDirOriginal . $fileName;

        // Carpeta de destino para la imagen redimensionada
        $direccionImagenesPeques = './imagenes_pequeñas/';
        $dest_path_peques = $direccionImagenesPeques . $fileName;

        // Cargar la imagen usando Imagick
        $imagen = new Imagick($fileTmpPath);

        // Redimensionar la imagen (por ejemplo, a un ancho máximo de 800 píxeles)
        $imagen->resizeImage(200, 0, Imagick::FILTER_LANCZOS, 1);

        // Guardar la imagen original en la carpeta "imagenes"
        if (move_uploaded_file($fileTmpPath, $dest_path_original)) {
            echo '<span style="color:green"><strong>Imagen subida con éxito ✅</strong></span><br>';
        } else {
            echo '<span style="color:red"><strong>❌No se pudo subir el archivo original⚠️⚠️</strong></span><br>';
        }

        // Guardar la imagen redimensionada en la carpeta "imagenes_pequeñas"
        if ($imagen->writeImage($dest_path_peques)) {
            echo '<span style="color:green"><strong>Imagen redimensionada con éxito" ✅</strong></span><br>';
			
        } else {
            echo '<span style="color:red"><strong>❌No se pudo subir el archivo redimensionado⚠️⚠️</strong></span><br>';
        }
		 // Mostrar la imagen original y la redimensionada
		echo '<img src="' . $dest_path_original . '" alt="Imagen original"><br>';
        echo '<img src="' . $dest_path_peques . '" alt="Imagen redimensionada"><br>';
    } else {
        echo '<span style="color:red"><strong>❌No se permiten cargar archivos con extensión .' . $fileExtension . '⚠️⚠️</strong></span><br>';
    }
}
?>
