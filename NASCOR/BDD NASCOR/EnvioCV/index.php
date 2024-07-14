<?php
include '../0comun/libreria.php';
cabecera("personas.css",'../0comun/estilos.css');
echo '<p style= "color:white">(Solo accesible para el administrador.)</p>';
echo '<a href="listaCandidatos.php"><button class="btn1">Lista de candidatos</button></a>';

echo "
		<div id='formulario'>
		<h2 class='developery'>DEVELOPERY</h2>
			<div>
				<h4>Trabaja con nosotros</h4>
				<img id='flecha' src='./flecha-hacia-abajo.png'>
			</div>

		<form action='añadirCandidatura.php' method='post' enctype='multipart/form-data'> 
			<p><input type='text' name='nombre' placeholder='Nombre:' required></p>
			<p><input type='text' name='apellido1' placeholder='Primer apellido:' required></p>
			<p><input type='text' name='apellido2' placeholder='Segundo apellido:' required></p>
			<p><select name=puestoTrabajo>
				<option value='0' disabled selected>Escoja el puesto solicitado</option>
				<option value='Desarrollador Front End'>Desarrollador Front End</option>
				<option value='Desarrollador Back End'>Desarrollador Back End</option>
				<option value='Dessarrollador Full Stack'>Dessarrollador Full Stack</option>
				<option value='Analista de Datos'>Analista de Datos</option>
			</p><br>
			<p><input type='mail' name='mail' required placeholder='TuCorreoDeContacto@dominio.es'>

			<p><input type='file' required name='añadirArchivo'/></p>
			<span class='adjuntar'>⬆️Adjunte aquí su CV</span> .
			<p><input type='submit' name='boton' value='Añadir candidatura'></p>
		  </form>
		  </div>";
pie("");

?>

