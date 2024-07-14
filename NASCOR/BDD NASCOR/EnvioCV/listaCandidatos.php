<?php
include '../0comun/libreria.php';
cabecera("personas.css",'../0comun/estilos.css');
session_start(); //funcion session_start() para iniciar sesion.

// Verificaremos si el usuario entrante está autenticado como administrador
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    // Si no estás autenticado, redirige a la página de inicio de sesión (login.php) para que puedas volver a introducir los datos.
    header('Location: login.php');
    exit();
}
echo '<main>
		<div><a href="index.php"><button class="btn2">Añadir candidatura</button></a>
		</div>'; //boton para ir de nuevo al formulario.
$personas = json_decode(file_get_contents('personas.json'), true); //Cogemos el contenido del JSON para la variable $personas

if ($personas == null) { //Si la variable $personas está vacía mostramos mensaje.
    echo '<div class="candidatos">No hay candidatos actualmente.</div>';
} else {  // si contiene datos...
    echo '<div class="candidatos"><ol>';
    foreach ($personas as $per) {   //haremos que se muestren con un foreach persona por persona en un listado con sus datos, etc.
        echo "<div><li><strong>Nombre y apellidos: </strong>" . $per['Nombre'] . ' ';
        echo $per['Apellido1'] . ' ';
        echo $per['Apellido2'] . ',<br> ';
        echo "<strong>Correo de contacto: </strong>" . $per['Mail'] . ',<br> ';
        echo "<strong>Puesto solicitado: </strong>" . $per['Puesto'];

        // Mostrar que subió el usuario en caso de que lo haya subido / en nuestro caso será siempre ya que pusimos required en el input.
        if (isset($per['Archivo']) && !empty($per['Archivo'])) {
            $imagenPath = './archivos/' . $per['Archivo'];
            echo '<br>';
            echo "<a href='$imagenPath'>CV del candidato</a></li></div>";
        }else{
        	echo '</li><div>';
		}
    }
    echo '</ol></div>';
}
echo'</main>';
pie("");

?>
