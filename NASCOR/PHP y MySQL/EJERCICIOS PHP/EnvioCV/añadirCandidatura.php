<?php
include '../0comun/libreria.php';
cabecera("personas.css");
//botón para volver a index.php
echo '<div>
		<a href="index.php"><button class="btn2">Añadir otra candidatura</button></a>
	  </div> 
	  <main>';
// Verificar si el archivo JSON existe
if (file_exists('personas.json')) {
    $personas = json_decode(file_get_contents('personas.json'), true); //si existe transforma en JSON la variable personas
} else {
    // Si el archivo no existe, inicializa $personas como un array vacío
    $personas = array();
}

echo '<div class="pre">';
//print_r($_POST);

$persona = array(					//Creamos $persona con un array con subarrays de Nombre, Apellido1 y 2, Puesto, Mail y Archivo
    'Nombre' => $_POST['nombre'],
    'Apellido1' => $_POST['apellido1'],
    'Apellido2' => $_POST['apellido2'],
	'Puesto' => $_POST['puestoTrabajo'],
    'Mail' => $_POST['mail'],
    'Archivo' => '' // Valor predeterminado en caso de que no se haya subido ningún archivo y no de error si el usuario no sube nada.
);

if (isset($_FILES['añadirArchivo']) && $_FILES['añadirArchivo']['error'] === UPLOAD_ERR_OK) { //Si se añadió un archivo al input...
    // Obtenemos detalles del archivo subido
    $fileTmpPath = $_FILES['añadirArchivo']['tmp_name']; // Dirección donde se guarda el archivo TEMPORALMENTE
    $fileName = $_FILES['añadirArchivo']['name']; // Nombre del archivo
    $fileSize = $_FILES['añadirArchivo']['size']; // Tamaño
    $fileType = $_FILES['añadirArchivo']['type']; // Tipo de archivo

    $fileNameCmps = explode(".", $fileName); // Separamos el nombre del archivo por la zona de los puntos haciendo que "desaparezcan"
    $fileExtension = strtolower(end($fileNameCmps)); // Obtenemos la extensión del archivo accediendo al último elemento de $fileNameCmps 
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc', 'xlsx', 'docx', 'rtf', 'pdf'); //Extensiones permitidas
    
    if (in_array($fileExtension, $allowedfileExtensions)) { //Si en el array existe la extension y es una extensión permitida...
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension; // Generamos un nuevo nombre de archivo
        $uploadFileDir = './archivos/'; // Carpeta donde se guardarán los archivos
        $dest_path = $uploadFileDir . $newFileName; // Ruta completa para guardar el archivo
        
        if (move_uploaded_file($fileTmpPath, $dest_path)) { //Verificamos que el archivo haya pasado de la ubicacion temporal a la permanente
            echo '<span style= "color:green"><strong>Candidatura enviada correctamente✅</strong></span>';//Mensaje de éxito
            $persona['Archivo'] = $newFileName;// Si se sube un archivo con éxito, actualiza la clave "Imagen" en $persona
        } else {
            echo '<span style= "color:red"><strong>❌No se pudo subir el archivo⚠️⚠️</strong></span><br>';//Mensaje error
        }
    } else {
        echo "<span style= 'color:red'><strong>❌No se permiten cargar archivos con extensión .$fileExtension ⚠️⚠️</strong></span><br>";
		//Mensaje error por subir una extension NO PERMITIDA
    }
}

// Añadir la nueva persona al array de personas
$personas[] = $persona;

// Guardar el array actualizado en el archivo JSON
file_put_contents("personas.json", json_encode($personas));

//Mensaje de éxito en el guardado del archivo.
echo "<p>Gracias por enviar tu candidatura, recibirás en tu correo una copia de los datos enviados. Nos pondremos en contacto contigo con la mayor brevedad posible.</p>";


//Importamos el PHPMailer para mandar el correo
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Cargamos el autoload del Composer
require '../../vendor/autoload.php';

//Crea una instancia con un true que permite excepciones.
$mail = new PHPMailer(true);

try {
    //Configuración
    $mail->isSMTP();  										//Enviar usando SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Configuramos para enviar a traves del servidor SMTP
    $mail->SMTPAuth   = true;                                   //Habilitamos la autentificacion SMTP
    $mail->Username   = 'dvg9383@gmail.com';                     //Usuario SMTP 
    $mail->Password   = 'zuar cwuk rhnn hdfw';                               //Contraseña SMTP 
    $mail->SMTPSecure = 'ssl';            					//Habilitar enriptado TLS por seguridad.
    $mail->Port       = 465;      //Puerto TCP al que conectarse; se utiliza el 587 si el `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Receptores
    $mail->setFrom('dvg9383@gmail.com', 'De: RRHH Developery'); //Correo desde donde se envia y el nombre.
	$mail->addAddress('dvg9383@gmail.com', "De: " . $persona['Nombre'] . '. ' . $persona['Mail']); //Correo receptor
    $mail->addAddress($persona['Mail'], 'De :dvg9383@gmail.com');// Otro correo receptor. Este será para el usuario que rellena el formulario
	//$mail->addReplyTo($persona['Mail'], 'Copia para:'.$persona['Nombre']);// <- Esto envía una copia ''supuestamente''

    //Añadir algun archivo
    $mail->addAttachment("archivos/$newFileName", "Curriculum de ".$persona['Nombre'].' '.$persona['Apellido1'].' '.$persona['Apellido2']);       //Después de la ruta del archivo ponemos, y podemos poner el nombre del archivo.

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Curriculum de '.$persona['Nombre'].' '.$persona['Apellido1'].' '.$persona['Apellido2'];
    $mail->Body    = "Nombre y apellidos: ".$persona['Nombre'].' '.$persona['Apellido1'].' '.$persona['Apellido2'].'<br>'."Puesto: ".$persona['Puesto'].'<br>'.'Correo de contacto: '.$persona['Mail'];
	$mail->AltBody = "Nombre y apellidos: ".$persona['Nombre'].' '.$persona['Apellido1'].' '.$persona['Apellido2'].'<br>'."Puesto: ".$persona['Puesto'].'<br>'.'Correo de contacto: '.$persona['Mail'];


    $mail->send();  //lo que nos mostrará en nuestro navegador si el correo se mandó correctamente
    echo '<span style= "color:green">Mail enviado con éxito.✅</span>';
} catch (Exception $e) { //Si algo falló y no se pudo enviar mostrará el siguiente mensaje:
    echo "❌Error al intentar enviar el correo. Motivo: {$mail->ErrorInfo}⚠️⚠️";
}
	
	
echo '</div></main>';
pie("");
echo'</body></html>';

?>
