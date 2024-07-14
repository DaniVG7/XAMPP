<?php
require_once '../../0comun/libreria.php';
cabecera('../librosDisponibles.css','');
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
	echo "<div class='cuenta'><strong>¡Hola ". $_SESSION['username'].'!</strong> <br>';
	echo '<a href="../controladores/modificarUsuarioControlador.php?username='.$_SESSION['username'].'"><button>Mi cuenta</button></a> ';
	echo '<a href="../controladores/logOutControlador.php"><button>Cerrar sesión</button></a></div> ';

    echo '<h3 style="width:max-content; margin:auto; padding-top:25px; padding-bottom: 25px;">LIBROS DISPONIBLES</h3>';
    if($usuario['perfilUsuario'] === 'Administrador'){
	echo '<a href="../controladores/añadirLibroControlador.php"><button style="font-size:25px; margin-left:20px; margin-top:-50px; margin-bottom:20px;">+</button></a>';
	}?>
	<div class="contenedor-libros">
    <div class="libros">
	<?php
    foreach($listaLibros->libros as $libro){
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
	
	echo '</div></div>';
	?><!-- Flechas para navegar -->

	<div class="arrow left-arrow" onclick="moverLibros('izquierda')">◄</div>
	<div class="arrow right-arrow" onclick="moverLibros('derecha')">►</div>
<?php
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

	echo "<h2>Hola " . $_SESSION['username'] . '!</h2><br>';
	if($usuario['perfilUsuario'] === 'Administrador'){
	echo '<a href="../controladores/añadirLibroControlador.php"><button>Añadir libro</button></a><br><br>';
	}
    echo "<h3><p>Actualmente no hay ningún libro disponible en la biblioteca.<br> Espere a que algún usuario devuelva algún libro para poder adquirirlo.</p></h3>";
}
}

