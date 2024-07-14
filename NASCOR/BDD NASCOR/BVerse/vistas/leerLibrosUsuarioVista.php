<?php
require_once '../../0comun/libreria.php';
cabecera('../librosDisponibles.css','');
session_start();
require_once '../modelos/conjuntoLibrosClass.php';

if(!empty($_SESSION)){
if (!empty($listaLibros->libros)) {
	echo '<nav class="navbar"><a href="../index.php"><button>Mis libros</button></a>  ';
	echo '<a href="../controladores/consultarLibrosControlador.php"><button>Consultar libros disponibles</button></a>  ';
	echo '<a href="../controladores/leerAutoresControlador.php"><button>Nuestros autores</button></a>';
	echo' <form method="POST" action="../controladores/buscarLibroControlador.php"><input type="text" name="busqueda" placeholder="Búsqueda por título"><input type="submit" value=🔍 class="transparente"></form>';
	if($_SESSION['perfilUsuario'] === 'Administrador'){
		echo '<a href="../controladores/leerUsuariosControlador.php"><button>Administración</button></a></nav>  ';
		}
	echo'</nav>';
	echo "<div class='cuenta'><strong>¡Hola ". $_SESSION['username'].'!</strong><br>';
	echo '<a href="../controladores/logOutControlador.php"><button>Cerrar sesión</button></a> ';
	echo '<a href="../controladores/modificarUsuarioControlador.php?username='.$_SESSION['username'].'"><button>Mi cuenta</button></a> </div>';

	$nombreUsuario = $listaLibros->libros[0]['nombreLector'];
    echo '<h3>Libros de ' . $nombreUsuario . '</h3>';
   	?>
	<div class="contenedor-libros">
    <div class="libros">
	<?php
foreach($listaLibros->libros as $libro){
    echo '<div class="libro"><h3><u>' . $libro['titulo'] . '</u></h3>';
    if (!empty($libro['imagen'])) {
        echo "<img src='" . $libro['imagen'] . "' width='100px'><br><br>";
    } else {
        echo "<strong>Sin imagen disponible.</strong><br>";
    }
  	'<br> Idioma: '.$libro['idioma'].'.</h3><br>';
	if (!empty($libro['generoLiterario'])) {
        echo '<p><h4><u>GÉNERO</u></h4></p><div class="genero"><h4>' . $libro['generoLiterario'].'.</h4></div>';
    } else {
        echo "";
    }
	echo ' <a href= ../controladores/leerLibroControlador.php?idLibro=' . $libro['idLibro'].'>Ver más[...]</a><br><br>';
	echo ' <a href="../controladores/devolverLibroControlador.php?idLibro=' . $libro['idLibro'] . '"><button>Devolver libro</button></a><br></div>';
}
	echo'</div></div>';
	?><!-- Flechas para navegar -->
	<div class="arrow left-arrow" onclick="moverLibros('izquierda')">◄</div>
	<div class="arrow right-arrow" onclick="moverLibros('derecha')">►</div>
<?php
pie('../jsbverse.js');
}else {
	echo '<nav class="navbar"><a href="../index.php"><button>Mis libros</button></a>  ';
	echo '<a href="../controladores/consultarLibrosControlador.php"><button>Consultar libros disponibles</button></a>  ';
	echo '<a href="../controladores/leerAutoresControlador.php"><button>Nuestros autores</button></a> ';
	echo' <form method="POST" action="../controladores/buscarLibroControlador.php"><input type="text" name="busqueda" placeholder="Búsqueda por título"><input type="submit" value=🔍 class="transparente"></form>';
	if($_SESSION['perfilUsuario'] === 'Administrador'){
		echo '<a href="../controladores/leerUsuariosControlador.php"><button>Administración</button></a></nav>  ';
	}
	echo'</nav>';
	echo "<div class='cuenta'><strong>¡Hola ". $_SESSION['username'].'!</strong><br>';
	echo '<a href="../controladores/logOutControlador.php"><button>Cerrar sesión</button></a> ';
	echo '<a href="../controladores/modificarUsuarioControlador.php?username='.$_SESSION['username'].'"><button>Mi cuenta</button></a> </div>';
    echo "<h3><p>Actualmente no hay ningún libro en tu lista de reservas.</p></h3>";
}
}