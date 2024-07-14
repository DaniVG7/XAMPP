<?php
include '../../0comun/libreria.php';
cabecera('../../0comun/estilos.css','../libros.css');
session_start();
if (isset($_SESSION['mensaje'])) {
    		echo $_SESSION['mensaje'].'<br>';
    		// Borra el mensaje de la sesión para que no se muestre nuevamente
   			unset($_SESSION['mensaje']);
			}


echo '<a href="anadir1LibroControlador.php"><button>Añadir libro</button></a><hr>';

echo '<main>';
		foreach ($libros->libros as $libro) {
			echo '<div><a href="borrarLibroControlador.php?posicion='.$libro['idLibro'].'"><button>Borrar</button></a> ';
			echo '<a href="modificar1LibroControlador.php?posicion='.$libro['idLibro'].'"><button>Modificar</button></a><br>';	
			echo '<strong>Título: </strong>'.$libro['titulo'].'<br>';	
			echo '<strong>Año de publicación: </strong>'.$libro['añoPublicacion'].'<br>';	
			echo '<strong>Idioma: </strong>'.$libro['idioma'].'</div><br>';	
			
		}
echo '</main>';
pie('');