<?php
require_once '../../0comun/libreria.php';
cabecera('../libroautor.css','');
if(!empty($_SESSION)){
	if (!empty($libro)) {
			echo '<div class="vermas"><h1>' . $libro['titulo'] . '</h1>';
			if (!empty($libro['imagen'])) {
			echo "<img src='" . $libro['imagen'] . "' width='300px'><br><br>";
			} else {
			echo "<strong>Sin imagen disponible.</strong><br>";
			 }
			 echo '<h3>de '.$libro['nombreAutor'].' '.$libro['ape1Autor'].' '.$libro['ape2Autor'].'<br>Obra publicada en el año '.$libro['añoPublicacion'].'.<br> Disponible en '.$libro['idioma'].'.</h3><br>';
			if (!empty($libro['sinopsisLibro'])) {
				echo '<p><h2><u>SINOPSIS</u></h2></p><div class="sinopsis"><code>' . $libro['sinopsisLibro'].'</code><br></div>';
			} else {
				echo "<strong>Sin sinopsis disponible.</strong><br>";
			}
			if (!empty($libro['generoLiterario'])) {
				echo '<p><h2><u>GÉNERO</u></h2></p><div class="genero"><h3>' . $libro['generoLiterario'].'.</h3><br></div>';
			} else {
				echo "";
			}
			if (!empty($libro['premios'])) {
				echo '<p><h2><u>PREMIOS</u></h2></p><div class="genero"><h3>' . $libro['premios'].'.</h3><br></div>';
			} else {
				echo '<p><h2><u>PREMIOS</u></h2></p><div class="genero"><h3>Sin premios conocidos</h3><br></div>';
			}
			if ($libro['idUsuario'] === $_SESSION['idUsuario']) {
				echo '<button class="leer"><strong>Empieza la aventura...</strong></button>';
			} elseif ($libro['idUsuario'] !== null) {
				echo '<button class="leer"><strong>Disponible próximamente...</strong></button>';
			} elseif ($libro['idUsuario']=== null) {
				echo ' <a href="../controladores/adquirirLibroControlador.php?idLibro=' . $libro['idLibro'].'&idUsuario='.$_SESSION['idUsuario'] . '"><button>Adquirir libro</button></a><br></div>';	}
		} else {
		   echo "<strong>Libro no encontrado o no disponible.</strong><br>";
	}
}

?>
