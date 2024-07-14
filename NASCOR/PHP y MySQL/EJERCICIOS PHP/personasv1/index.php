<?php
include '../0comun/libreria.php';
cabecera("personas.css");

echo '<a href="leerPersonas.php"><button class="btn1">Acceder al listado de personas</button></a>';
echo "<div id='Formulario'><form action='añadirPersona.php' method='post' enctype='multipart/form-data'>"; // Añade 'enctype' para permitir la carga de archivos
echo "
	<p><input type='text' name='nombre' placeholder='Nombre:' required></p>
	<p><input type='text' name='apellido1' placeholder='Primer apellido:' required></p>
	<p><input type='text' name='apellido2' placeholder='Segundo apellido:' required></p>
	<p></label><input type='text' name='ciudad' placeholder='Ciudad:' required></p>
	<p><input type='file' name='añadirArchivo'/></p>
	<p><input type='submit' name='boton' value='Añadir Persona'></p>
  </form>
  </div>";
pie("");
?>
