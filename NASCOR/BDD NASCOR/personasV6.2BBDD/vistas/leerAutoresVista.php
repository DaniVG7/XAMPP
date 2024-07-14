<?php
echo '<a href= "leerLibrosControlador.php">Ver libros</a><br><br>';
echo '<a href="anadir1AutorControlador.php">Añadir libro</a><hr>';
		foreach ($autores->autores as $autor) {
			echo '<a href="borrarLibroControlador.php?posicion='.$autor['idAutor'].'">Borrar</a> | ';
			echo '<a href="modificar1LibroControlador.php?posicion='.$autor['idAutor'].'">Modificar</a><br>';	
			echo '<strong>Id del autor: </strong>'.$autor['idAutor'].'<br>';	
			echo '<strong>Genero literario: </strong>'.$autor['generoLiterario'].'<br>';	
			echo '<strong>Premios : </strong>'.$autor['premios'].'<br>';	
		}