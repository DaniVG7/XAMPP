<?php
require_once '../../0comun/libreria.php';
cabecera('../librosUsuario.css','');
session_start();

if (isset($_SESSION['mensaje_alerta'])) {
    echo "<script>alert('{$_SESSION['mensaje_alerta']}')</script>";
    unset($_SESSION['mensaje_alerta']);
}
if(!empty($_SESSION)){
	
	if(!empty($_SESSION['username'])){
		echo '<nav class="navbar"><a href="../index.php"><button>Mis libros</button></a>  ';
		echo '<a href="../controladores/consultarLibrosControlador.php"><button>Consultar libros disponibles</button></a>  ';
		echo '<a href="../controladores/leerAutoresControlador.php"><button>Nuestros autores</button></a>';
		echo' <form method="POST" action="../controladores/buscarLibroControlador.php"><input type="text" name="busqueda" placeholder="Búsqueda por título"><input type="submit" value=🔍 class="transparente"></form>';
		if($_SESSION['perfilUsuario'] === 'Administrador'){
			echo '<a href="../controladores/leerUsuariosControlador.php"><button>Administración</button></a></nav>  ';
			}
		echo'</nav>';
		echo "<div class='cuenta'><strong>¡Hola ". $_SESSION['username'].'!</strong><br>';
		echo '<a href="../controladores/modificarUsuarioControlador.php?username='.$_SESSION['username'].'"><button>Mi cuenta</button></a> ';
		echo '<a href="../controladores/logOutControlador.php"><button>Cerrar sesión</button></a></div> ';

		echo '<h3>Nuestros autores</h3>';
		if($usuario['perfilUsuario'] === 'Administrador'){
		echo '<a href="../controladores/añadirAutorControlador.php"><button style="font-size:25px; margin-left:20px;">+</button></a><br><br>';
		}
		echo'<div class="formBusqueda"> <form class="busqueda" method="POST" action="../controladores/buscarAutorControlador.php"><input type="text" name="busqueda" placeholder="Buscar autor"><input type="submit" value=🔎 class="transparente"></form></div>';
		
		echo '<main class="autores">';
		foreach ($listaAutores->autores as $autor) {
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
			if($usuario['perfilUsuario'] === 'Administrador'){
			echo '<a href="../controladores/modificarAutorControlador.php?idAutor='.$autor['idAutor'].'"><button>Modifcar autor</button></a>';
		}
			echo'<a href="../controladores/consultarLibrosAutorControlador.php?idAutor='.$autor['idAutor'].'"><button>Ver libros</button></a><br></div>';
		}
		echo '</main>';
	} else {
		echo '<nav class="navbar"><a href="../controladores/leerLibrosUsuarioControlador.php"><button>Mis libros</button></a>';
		echo '<a href="../controladores/consultarLibrosControlador.php"><button>Consultar libros disponibles</button></a>';
		echo '<a href="../controladores/leerAutoresControlador.php"><button>Nuestros autores</button></a></nav>';
		echo' <form method="POST" action="../controladores/buscarLibroControlador.php"><input type="text" name="busqueda" placeholder="Búsqueda por título"><input type="submit" value=🔍 class="transparente"></form>';
		
		echo "<div class='cuenta'><strong>¡Hola ". $_SESSION['username'].'!</strong><br>';
		echo '<a href="../controladores/modificarUsuarioControlador.php?username='.$_SESSION['username'].'"><button>Mi cuenta</button></a> ';
		echo '<a href="../controladores/logOutControlador.php"><button>Cerrar sesión</button></a></div> ';

		echo '<h3>Nuestros autores :</h3>';
		if($usuario['perfilUsuario'] === 'Administrador'){
		echo '<a href="../controladores/añadirAutorControlador.php"><button>Añadir autor</button></a><br><br>';
		}
		echo "<h2>Hola " . $_SESSION['username'] . '!</h2><br>';
		echo "<h3><p>Actualmente no disponemos de autores con libros en nuestra biblioteca.<p></h3>";
	}
}else{
	echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
}