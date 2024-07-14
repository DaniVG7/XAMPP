
<?php
require_once '../../0comun/libreria.php';
cabecera('../librosDisponibles.css','');
if(!empty($_SESSION)){
if (!empty($listaAutores->autoresEncontrados)) {
	echo '<nav class="navbar"><a href="../index.php"><button>Mis libros</button></a>  ';
	echo '<a href="../controladores/consultarLibrosControlador.php"><button>Consultar libros disponibles</button></a>  ';
	echo '<a href="../controladores/leerAutoresControlador.php"><button>Nuestros autores</button></a>';
	echo' <form method="POST" action="../controladores/buscarLibroControlador.php"><input type="text" name="busqueda" placeholder="Búsqueda por título"><input type="submit" value=🔍 class="transparente"></form>';
	if($_SESSION['perfilUsuario'] === 'Administrador'){
		echo '<a href="../controladores/leerUsuariosControlador.php"><button>Administración</button></a></nav>  ';
		}
	echo'</nav>';
	echo "<div class='cuenta'><strong>¡Hola ". $_SESSION['username'].'!</strong> <br>';
	echo '<a href="../controladores/modificarUsuarioControlador.php?username='.$_SESSION['username'].'"><button>Mi cuenta</button></a> ';
	echo '<a href="../controladores/logOutControlador.php"><button>Cerrar sesión</button></a></div> ';

    echo '<h3>COINCIDENCIAS ENCONTRADAS CON "'.$_POST['busqueda'].'"</h3>';

    foreach($listaAutores->autoresEncontrados as $autor){
    echo "<div class='autor'><h3><u>" . $autor['nombre'] .' '.$autor['apellido1'].' '.$autor['apellido2']. '</u></h3> <br>';
			if (!empty($autor['fechaNacimiento'])) {
				echo "<p><strong>Fecha de nacimiento: </strong> " . $autor['fechaNacimiento'] . '.</p>';
			} else {
				echo "<strong>Fecha de nacimiento: </strong> fecha de nacimiento no especificada.</p>";
			}
			if (!empty($autor['premios'])) {
				echo "<p><strong>Premios: </strong> " . $autor['premios'] . '.</p>';
			} else {
				echo "<p><strong>Premios: </strong> No especificados.</p>";
			}
			if (!empty($autor['generoLiterario'])) {
				echo "<p><strong>Género literario: </strong> " . $autor['generoLiterario'] . '.</p>';
			} else {
				echo "<p><strong>Género literario: </strong> No especificado.</p>";
			}
			if($_SESSION['perfilUsuario'] === 'Administrador'){
			echo '<a href="../controladores/modificarAutorControlador.php?idAutor='.$autor['idAutor'].'"><button>Modifcar autor</button></a>';
		}
			echo'<a href="../controladores/consultarLibrosAutorControlador.php?idAutor='.$autor['idAutor'].'"><button>Ver libros</button></a><br></div>';
	
    }
	echo'</div></div>';

pie('../jsbverse.js');
} else {
	echo '<nav class="navbar"><a href="../index.php"><button>Mis libros</button></a>  ';
	echo '<a href="../controladores/consultarLibrosControlador.php"><button>Consultar libros disponibles</button></a>  ';
	echo '<a href="../controladores/leerAutoresControlador.php"><button>Nuestros autores</button></a>  ';
	echo' <form method="POST" action="../controladores/buscarLibroControlador.php"><input type="text" name="busqueda" placeholder="Búsqueda por título"><input type="submit" value=🔍 class="transparente"></form>';
	if($_SESSION['perfilUsuario'] === 'Administrador'){
		echo '<a href="../controladores/leerUsuariosControlador.php"><button>Administración</button></a></nav>  ';
		}
	echo "<div class='cuenta'><strong>¡Hola ". $_SESSION['username'].'!</strong> <br>';
	echo '<a href="../controladores/modificarUsuarioControlador.php?username='.$_SESSION['username'].'"><button>Mi cuenta</button></a> ';
	echo '<a href="../controladores/logOutControlador.php"><button>Cerrar sesión</button></a></div> ';

    echo '<h3><p>Lo sentimos '.$_SESSION['username'].'. Lamentablemente no se encontraron coincidencias con " '.$_POST['busqueda'].' "</p></h3>';
}
}