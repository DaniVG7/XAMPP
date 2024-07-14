<?php
$to = 'dvg9383@gmail.com, dani935607@hotmail.com';
$subject = 'mail de prueba';
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$message = 'Nombre: ' . $nombre . ' Apellidos: ' . $apellidos . ' Edad: ' . $edad . ' Este es un mensaje de prueba.';
$headers = ''; // Debes definir una dirección de correo válida aquí

mail($to, $subject, $message, $headers); //Lo de dentro de la funcion son variables
echo 'Mail enviado correctamente'; //esto solamente saldrá si el mail se envía ya que se pone después de la función.
?>


<?php
// Comprobamos si se ha enviado el formulario
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $to = 'dvg9383@gmail.com';

//     // Recogemos los datos del formulario
//     $nombre = $_POST['nombre'];
//     $apellidos = $_POST['apellidos'];
//     $edad = $_POST['edad'];

//     // Construimos el mensaje
//     $message = "Nombre: $nombre\nApellidos: $apellidos\nEdad: $edad\nEste es un mensaje de ejemplo.";

//     // Encabezados del correo
//     $headers = 'From: tu_direccion_de_correo@example.com' . "\r\n" .
//                'Reply-To: tu_direccion_de_correo@example.com' . "\r\n" .
//                'X-Mailer: PHP/' . phpversion();

//     // Enviamos el correo
//     if (mail($to, 'Recibido por formulario', $message, $headers)) {
//         echo 'Datos enviados correctamente';
//     } else {
//         echo 'Hubo un error al enviar los datos.';
//     }
// } else {
//     echo 'El formulario no ha sido enviado.';
// }
?>