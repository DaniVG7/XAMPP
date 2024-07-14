<?php
require_once '../../0comun/libreria.php';
cabecera('../librosUsuario.css','');
	if(!empty($_SESSION['username'])){
		echo '<nav class="navbar"><a href="../controladores/leerLibrosUsuarioControlador.php"><button>Mis libros</button></a>';
		echo '<a href="../controladores/consultarLibrosControlador.php"><button>Consultar libros disponibles</button></a>';
		echo '<a href="../controladores/leerAutoresControlador.php"><button>Nuestros autores</button></a>';
		echo' <form method="POST" action="../controladores/buscarLibroControlador.php"><input type="text" name="busqueda" placeholder="Búsqueda por título"><input type="submit" value=🔍 class="transparente"></form>';
		if($_SESSION['perfilUsuario'] === 'Administrador'){
		echo '<a href="../controladores/leerUsuariosControlador.php"><button>Administración</button></a></nav>  ';
		}
		echo "<div class='cuenta'><strong>¡Hola ". $_SESSION['username'].'!</strong><br>';
		echo '<a href="../controladores/modificarUsuarioControlador.php?username='.$_SESSION['username'].'"><button>Mi cuenta</button></a> ';
		echo '<a href="../controladores/logOutControlador.php"><button>Cerrar sesión</button></a></div> ';
		echo '<h3>Usuarios</h3>';
				echo'<div class="formBusqueda"> <form class="busqueda" method="POST" action="../controladores/buscarUsuarioControlador.php"><input type="text" name="busqueda" placeholder="Buscar usuario"><input type="submit" value=🔎 class="transparente"></form></div><br><br>';

		echo '<main class="usuarios">';
		foreach ($listaUsuarios->usuarios as $usuario) {
			if($_SESSION['perfilUsuario'] === 'Administrador'){
			echo '<div class="usuario">USERNAME: '.$usuario['username'].'<br>PRIVILEGIOS: ';
			echo $usuario['perfilUsuario'].'<br>';
			echo '<a href="../controladores/modificarPrivilegiosControlador.php?idUsuario='.$usuario['idUsuario'].'"><button>Modifcar usuario</button></a></div>';
		}
	}
		echo '</main>';
	}else{
		echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
	}
	