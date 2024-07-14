<?php
require_once '../../0comun/libreria.php';
cabecera('../librosUsuario.css','');
if(!empty($_SESSION)){
	if (!empty($librosAutor)) {
		echo '<nav class="navbar"><a href="../index.php"><button>Mis libros</button></a>  ';
		echo '<a href="../controladores/consultarLibrosControlador.php"><button>Consultar libros disponibles</button></a>  ';
		echo '<a href="../controladores/leerAutoresControlador.php"><button>Nuestros autores</button></a>  ';
		echo' <form method="POST" action="../controladores/buscarLibroControlador.php"><input type="text" name="busqueda" placeholder="Búsqueda por título"><input type="submit" value=🔍 class="transparente"></form>';
		if($_SESSION['perfilUsuario'] === 'Administrador'){
			echo '<a href="../controladores/leerUsuariosControlador.php"><button>Administración</button></a></nav>  ';
		}
		echo'</nav>';

		echo "<div class='cuenta'><strong>¡Hola ". $_SESSION['username'].'! </strong><br>';
		echo '<a href="../controladores/modificarUsuarioControlador.php?username='.$_SESSION['username'].'"><button>Mi cuenta</button></a>  ';
		echo '<a href="../controladores/logOutControlador.php"><button>Cerrar sesión</button></a></div> ';
		echo '<h3><u>Libros de ' . $librosAutor[0]['nombreAutor'] .' '.$librosAutor[0]['ape1Autor'].' '.$librosAutor[0]['ape2Autor'] .'</u></h3>';
		echo "<div class='cuenta'><strong>¡Hola ". $_SESSION['username'].'! </strong><br>';
		echo '<a href="../controladores/modificarUsuarioControlador.php?username='.$_SESSION['username'].'"><button>Mi cuenta</button></a>  ';
		echo '<a href="../controladores/logOutControlador.php"><button>Cerrar sesión</button></a></div> ';
		echo '<main>';
		foreach ($librosAutor as $libro) {
			echo "<div class='libro'><h3> " . $libro['titulo'] . '.</h3><br>';
			if (!empty($libro['imagen'])) {
				echo "<img src='" . $libro['imagen'] . "' width='200px'></img><br>";
			} else {
				echo "<strong>Sin imagen disponible</strong><br>";
			}

			if (!empty($libro['generoLiterario'])) {
				echo "<h4><u>Género</u><br>" . $libro['generoLiterario'] . '.</h4>';
			} else {
				echo "<strong>Género:</strong> No especificado.<br>";
			}

			echo "<h4>Año de publicación: " . $libro['añoPublicacion'] . '.</h4>';

			if (!empty($libro['premios'])) {
				echo "<h4><u>Premios</u><br>" . $libro['premios'] . '</h4>';
			} else {
				echo "<h4><u>Premios</u><br> Sin premiar</h4>";
			}
			echo ' <a href= ../controladores/leerLibroControlador.php?idLibro=' . $libro['idLibro'].'>Ver más[...]</a><br><br><br>';
			echo '<a href="../controladores/borrarLibroControlador.php?idLibro='.$libro['idLibro'].'"><img class="papelera" src="https://static.vecteezy.com/system/resources/previews/016/161/228/non_2x/recycle-bin-icon-outline-web-interface-vector.jpg"></img></a>';
	echo '<a href="../controladores/actualizarLibroControlador.php?idLibro='.$libro['idLibro'].'"><img class="actualizar" src="../actualizar.png"></img></a></div>';
		}
		echo'</main>';
	} else {
		echo '<nav class="navbar"><a href="../index.php"><button>Mis libros</button></a>  ';
		echo '<a href="../controladores/consultarLibrosControlador.php"><button>Consultar libros disponibles</button></a>  ';
		echo '<a href="../controladores/leerAutoresControlador.php"><button>Nuestros autores</button></a>  ';
		echo' <form method="POST" action="../controladores/buscarLibroControlador.php"><input type="text" name="busqueda" placeholder="Búsqueda por título"><input type="submit" value=🔍 class="transparente"></form>';
		if($_SESSION['perfilUsuario'] === 'Administrador'){
			echo '<a href="../controladores/leerUsuariosControlador.php"><button>Administración</button></a></nav>  ';
		}
		echo'</nav>';

		echo "<div class='cuenta'><strong>¡Hola ". $_SESSION['username'].'!</strong><br>';
		echo '<a href="../controladores/logOutControlador.php"><button>Cerrar sesión</button></a> ';
		echo '<a href="../controladores/modificarUsuarioControlador.php?username='.$_SESSION['username'].'"><button>Mi cuenta</button></a> </div>';
		echo "<h3><p>Lo sentimos, lamentablemente no disponemos de ningún título de este autor en este momento.</p></h3>";
	}
}else{
	echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
}
/*foreach($listaLibros->libros as $libro){
    echo '<div class="libro"><h3><u>' . $libro['titulo'] . '</u></h3>';
    if (!empty($libro['imagen'])) {
        echo "<img src='" . $libro['imagen'] . "'><br><br>";
    } else {
        echo "<strong>Sin imagen disponible.</strong><br>";
    }
  	echo '<br><strong>IDIOMA: </strong>'.$libro['idioma'].'.</h3><br>';
	if (!empty($libro['generoLiterario'])) {
        echo '<p><h4><u>GÉNERO</u></p>'. $libro['generoLiterario'].'.</h4>';
    } else {
        echo "";
    }
	echo ' <a href= ../controladores/leerLibroControlador.php?idLibro=' . $libro['idLibro'].'>Ver más[...]</a><br><br><br>';
	if($_SESSION['perfilUsuario'] === 'Administrador'){
	echo '<a href="../controladores/borrarLibroControlador.php?idLibro='.$libro['idLibro'].'"><img class="papelera" src="https://static.vecteezy.com/system/resources/previews/016/161/228/non_2x/recycle-bin-icon-outline-web-interface-vector.jpg"></img></a>';
	echo '<a href="../controladores/actualizarLibroControlador.php?idLibro='.$libro['idLibro'].'"><img class="actualizar" src="../actualizar.png"></img></a>';

	}
	
	if($libro['idUsuario']=== null){
        echo ' <a href="../controladores/adquirirLibroControlador.php?idLibro=' . $libro['idLibro'].'&idUsuario='.$usuario['idUsuario'] . '"><button>Adquirir libro</button></a><br></div>';
	}else{
		echo '<button style="background-color:darkblue"><b>No disponible😞</strong></b><br></div>';
	}
    }
	*/