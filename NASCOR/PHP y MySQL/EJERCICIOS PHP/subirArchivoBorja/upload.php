<?php
echo '<pre>';
print_r($_POST);
echo '<hr>';
print_r($_FILES);
echo '</pre>';
	

if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload') {
	if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
		// get details of the uploaded file
		$fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
		$fileName = $_FILES['uploadedFile']['name']; // document-20.pdf
		$fileSize = $_FILES['uploadedFile']['size'];
		$fileType = $_FILES['uploadedFile']['type'];
		//Como localizar la extensión del archivo
		$fileNameCmps = explode(".", $fileName); //$fileNameCmps[0]='document-20' $fileNameCmps[1]='pdf'
		$fileExtension = strtolower(end($fileNameCmps)); //pdf
		$allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc', 'xlsx', 'docx','pdf');
		if (in_array($fileExtension, $allowedfileExtensions)) {
			$newFileName = md5(time() . $fileName) . '.' . $fileExtension;
			// directory in which the uploaded file will be moved
			$uploadFileDir = './archivos_subidos/';
			$dest_path = $uploadFileDir . $newFileName;
			if (move_uploaded_file($fileTmpPath, $dest_path)) {
				echo 'Archivo subido correctamente';
			} else {
				echo 'Se ha producido un error al subir el archivo';
			}
		} else {
			echo 'El archivo no se puede subir porque no es de una extensión permitida';
		}

	}	
}
