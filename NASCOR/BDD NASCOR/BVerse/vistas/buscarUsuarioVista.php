<?php
require_once '../../0comun/libreria.php';
cabecera('../librosDisponibles.css','');
if(!empty($_SESSION)){
if (!empty($listaUsuarios->usuariosEncontrados)) {
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
 	echo '<main class="usuarios">';
    foreach ($listaUsuarios->usuariosEncontrados as $usuario) {
    if ($_SESSION['perfilUsuario'] === 'Administrador') {
        echo '<div class="usuario">USERNAME: ' . $usuario['username'] . '<br>PRIVILEGIOS: ';
        echo $usuario['perfilUsuario'] . '<br>';
        echo '<a href="../controladores/modificarPrivilegiosControlador.php?idUsuario=' . $usuario['idUsuario'] . '"><button>Modificar usuario</button></a></div>';
    }
	echo'<main>';
}

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