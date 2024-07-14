<?php
echo '<pre>';
print_r($_POST);
echo '<hr>';
print_r($_FILES);

if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload') {
	if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
	// get details of the uploaded file 
	$fileTmpPath = $_FILES['uploadedFile']['tmp_name']; // direccion donde se guarda el archivo
	$fileName = $_FILES['uploadedFile']['name'];   		// nombre del archivo
	$fileSize = $_FILES['uploadedFile']['size'];		// tamaño
	$fileType = $_FILES['uploadedFile']['type'];		//tipo de archivo 
	
	$fileNameCmps = explode(".", $fileName); //explode separa un array en varios arrays a partir del primer parametro por lo cual aqui 				$fileNameCmps[0] = Nombredocumento-1 (por ejemplo) y $fileNameCmps[1] = pdf
	$fileExtension = strtolower(end($fileNameCmps)); // Coge el ultimo array de $fileNameCMmps es decir [1]= pdf.
	$allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc', 'xlsx', 'docx');
		if (in_array($fileExtension, $allowedfileExtensions)) {
			$newFileName= md5(time() . $fileName) . '.' . $fileExtension;
			//echo $fileName.'<br>';
			//echo $newFileName;  el nuevo nombre le añade unos numeros con el md5time para que no coincidan los nombres con otros que se suban 			al servidor por otras personas
			$uploadFileDir = './archivos/'; // ./ archivos, se pone ./ para que la carpeta archivos se cree en la misma donde se ejecuta el php. --------------------------------------ES IMPORTANTE CREAR LA CARPETA PARA QUE SE PUEDAN SUBIR LOS ARCHIVOS.
			$dest_path = $uploadFileDir . $newFileName;
			if (move_uploaded_file($fileTmpPath, $dest_path)){
				echo 'Archivo subido correctamente';
			}else{
				echo 'No se pudo subir el archivo';
			}
		}else{
			echo "No se permiten cargar archivos .$fileExtension";
		}
	}
}