<?php
echo '<a href="leerAutoresControlador.php">Ver autores </a><br><br>';
echo '<a href="anadir1LibroControlador.php">Añadir libro</a><hr>';
		foreach ($libros->libros as $libro) {
			echo '<a href="borrarLibroControlador.php?posicion='.$libro['idLibro'].'">Borrar</a> | ';
			echo '<a href="modificar1LibroControlador.php?posicion='.$libro['idLibro'].'">Modificar</a><br>';	
			echo '<strong>Título: </strong>'.$libro['titulo'].'<br>';	
			echo '<strong>Número de páginas: </strong>'.$libro['numPaginas'].'<br>';	
			echo '<strong>Idioma: </strong>'.$libro['idioma'].'<br>';	
			echo '<strong>Año de publicación: </strong>'.$libro['añoPublicacion'].'<hr>';																	echo '<strong>Estante: </strong>'.$libro['idEstante'].'<hr>';				
			echo '<strong>Propietario: </strong>'.$libro['idPropietario'].'<hr>';	
			//echo '<strong>Propietario: </strong>'.$libro['idAutor'].'<hr>';	

		}