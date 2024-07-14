<?php
require_once '../../0comun/libreria.php';
cabecera('../añadirModificar.css','');
echo'<div>';
if(!empty($_SESSION)){ ?>

 <h2>Modificar datos del título <?php echo $datosLibro['titulo'];?></h2>
  <div class="formcurso">
	<form method="POST" action="../controladores/actualizar2LibroControlador.php">
		<label>Titulo:</label><input type="text" required name="titulo" value="<?php echo $datosLibro['titulo'] ?>" ><br>
		<label>Número de páginas:</label><input type="text"  name="numPaginas" value="<?php echo $datosLibro['numPaginas'] ?>" ><br>
		<label>Idioma:</label><input type="text" required  name="idioma" value="<?php echo $datosLibro['idioma'] ?>" ><br>		
		<label>Año de publicacion:</label><input type="number" name="añoPublicacion" value="<?php echo $datosLibro['añoPublicacion'] ?>" ><br>
		<label>Genero literario:</label><input type="text" required name="generoLiterario" value="<?php echo $datosLibro['generoLiterario'] ?>" ><br>
		<label>Premios</label><input type="text" name="premios" value="<?php echo $datosLibro['premios'] ?>" ><br>
		<label>Autor</label>
		<select name="autor">
		<option selected value="<?php echo $datosLibro['idAutor'] ?>"><?php echo $datosLibro['nombreAutor'].' '.$datosLibro['ape1Autor'].' '.$datosLibro['ape2Autor'] ?></option>
		<?php
		foreach($listaAutores->autores as $autor){
			echo '<option value="'.$autor['idAutor'].'">'.$autor['nombre'].' '.$autor['apellido1'].' '.$autor['apellido2'].'</option>';
		}
	    ?>
		</select>

		<label>Sinopsis:</label>
		<textarea required name="sinopsis" rows="12" value="<?php echo $datosLibro['sinopsisLibro'] ?>"><?php echo $datosLibro['sinopsisLibro'] ?></textarea><br>
		<input type="hidden" name= "idLibro" value=" <?php echo $datosLibro['idLibro'] ?>">
		<input type="submit" value="Modificar datos"> 
	</form><br><br>
	
</div>
<?php
	
 }else{
	echo '';
}
