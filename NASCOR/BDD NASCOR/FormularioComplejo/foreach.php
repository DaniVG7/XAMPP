<?php
// reference the Dompdf namespace
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Leemos el fichero de personas
$personas = json_decode(file_get_contents('array.json'), true);

echo '<pre>';
print_r($_POST);
echo '</pre>';

$formulario = $_POST['formulario'];

if ($formulario=="listado") {
	$boton = $_POST['boton'];
	if ($boton=="Generar EXCEL") {
		require '../../../../vendor/autoload.php';
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
	}
	else {
		$contenido .= '<h1>Listado de personas</h1>';
		$contenido .='<table>';
	}
	foreach ($personas as $valor) {
		if (($valor['Curso']==$_POST['curso']) && ($valor['Ciudad']==$_POST['ciudad'])){
			$i++;
			if ($boton=="Generar EXCEL") {
				$sheet->setCellValue('A'.$i,$valor['Nombre']);
				$sheet->setCellValue('B'.$i,$valor['Apellido1']);
				$sheet->setCellValue('C'.$i,$valor['Telefono']);
				$sheet->setCellValue('D'.$i,$valor['Ciudad']);
			}
			else {
				$contenido .= '<tr><td>'.$valor['Nombre'].'</td><td> '.$valor['Apellido1'].'</td><td> '.$valor['Telefono'].'</td><td> '.$valor['Ciudad'].'</td></tr>';

			}
		}
	}
	$contenido .='</table>';
	if ($i==0) {
		$contenido .= "No hay alumnos para el curso ".$_POST['curso']." y la ciudad ".$_POST['ciudad']; 
	}
	if ($boton=='Generar HTML') {
		echo $contenido;
	}
	elseif ($boton=='Generar EXCEL') {
		$writer = new Xlsx($spreadsheet);
		$writer->save('listado.xlsx');	
		header('Location: listado.xlsx');
	}
	elseif ($boton=='Enviar por correo') {
		$correo = $_POST['correo'];
		//Load Composer's autoloader
		require '../../../../vendor/autoload.php';
		//Instalacion con carperta
		//require 'PHPMailer-master/src/Exception.php';
		//require 'PHPMailer-master/src/PHPMailer.php';
		//require 'PHPMailer-master/src/SMTP.php';
		
		
		//Create an instance; passing `true` enables exceptions
		$mail = new PHPMailer(true);
		try {
    		//Server settings
    		$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    		$mail->isSMTP();                                            //Send using SMTP
    		$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    		$mail->Username   = 'bmulleras@gmail.com';                     //SMTP username
    		$mail->Password   = 'gacybaowhthnpjdc';                               //SMTP password
    		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    		$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

 		   //Recipients
    		$mail->setFrom('bmulleras@gmail.com');
    		$mail->addAddress($correo);               //Name is optional
    		//Content
    		$mail->isHTML(true);                                  //Set email format to HTML
    		$mail->Subject = 'Listado de alumnos';
    		$mail->Body    = $contenido;
    		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    		$mail->send();
    		echo 'Mail enviado a '.$correo;
		} catch (Exception $e) {
   			 echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}
	elseif ($boton=='Generar PDF') {
		require '../../../../vendor/autoload.php'; // SE usa si composer

		// instantiate and use the dompdf class
		$dompdf = new Dompdf();
		$dompdf->loadHtml($contenido);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4', 'landscape');

		// Render the HTML as PDF
		$dompdf->render();
		ob_end_clean();
		// Output the generated PDF to Browser
		$dompdf->stream();

	}
}
elseif ($formulario=="anadir") {
	$persona_temp= array (
				'Nombre' => $_POST['nombre'],
				'Apellido1' => $_POST['apellido'],
				'Telefono' =>  $_POST['telefono'],
				'Ciudad' => $_POST['ciudad'],	
				'Curso' => $_POST['curso']
	);
	$personas[]=$persona_temp;
echo '<pre>';
echo 'Despues de añadir<br>';
print_r($personas);
echo '</pre>';	
file_put_contents("array.json",json_encode($personas));
}
else {
	echo "Te estas pasando de listo";
}
	



?>