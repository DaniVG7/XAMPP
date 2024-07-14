<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dvg9383@gmail.com';                     //SMTP username
    $mail->Password   = 'zuar cwuk rhnn hdfw';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;      //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('dvg9383@gmail.com', 'De: Daniel Vargas García');
    $mail->addAddress('dani935607@hotmail.com', 'Para: Nanielo');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information'); <- Esto envía una copia a otro correo (por si lo queremos guardar por ej).


    //Añadir algun archivo
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Añadir archivo o foto.
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Después de la ruta del archivo ponemos, y podemos poner el nombre del archivo.

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();  //lo que nos mostrará en nuestro navegador si el correo se mandó correctamente
    echo 'Mail enviado con éxito.';
} catch (Exception $e) { //Si algo falló y no se pudo enviar mostrará el siguiente mensaje:
    echo "Error al intentar enviar el correo. Mailer Error: {$mail->ErrorInfo}";
}