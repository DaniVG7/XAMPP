<?php
require_once '../../0comun/libreria.php';
cabecera('../añadirModificar.css','');
if(!empty($_SESSION)){  ?>

<main>
	<h2>Añadir libro</h2>
<div class="formcurso">
<form action="añadir2LibroControlador.php" method="post">
	<label><strong>Título:</strong></label><input type="text" required name="titulo"><br>
	<label><strong>Número de páginas:</strong></label><input type="number" required name="numPaginas"><br>
	<label><strong>Idioma:</strong></label><input type="text" required name="idioma"><br>
	<label><strong>Año de publicación:</strong></label><input type="number" name="añoPublicacion" required><br>
	<label><strong>Género literario:</strong></label><input type="text" required name="generoLiterario" required><br>
	<label><strong>Premios:</strong></label><input type="text"  name="premios"><br>
	<label><strong>URL imagen portada:</strong></label><input type="text" name="imagen" required>
	<p>Aviso: introduzca una url con la imagen de la portada del libro añadido.</p>
	<label><strong>Autor:</strong></label>
<select required name="autor[]" >
	<option value="" disabled selected >Escoja un autor</option>
    <?php foreach ($listaAutores->autores as $autor) {
        echo '<option value="' . $autor['idAutor'] . '">' . $autor['nombre'] . ' ' . $autor['apellido1'] . ' ' . $autor['apellido2'] . '</option>';
    }
    ?>
</select><p>Aviso: si el autor no se encuentra en nuestra lista de autores vaya primero a <a href="../controladores/añadirAutorControlador.php">añadir autor.</a></p>
	<label><strong>Sinopsis</strong></label><br>
	<textarea required name="sinopsis" rows="10" cols="50"></textarea><br><br>
	<input type="submit" name="boton" value="Añadir libro">
</form>
</div>
</main>
<?php
}
