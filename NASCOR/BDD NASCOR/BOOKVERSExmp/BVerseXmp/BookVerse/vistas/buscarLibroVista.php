<?php
/*echo'<pre>';
var_dump($listaLibros->librosEncontrados);
foreach($listaLibros->librosEncontrados as $libro){
		echo $libro['titulo'].'<br>';
	
}*/ ?>
	
<?php
require_once '../../0comun/libreria.php';
cabecera('../librosDisponibles.css','');
if(!empty($_SESSION)){
if (!empty($listaLibros->librosEncontrados)) {
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
   ?>
	<div class="contenedor-libros">
    <div class="libros">
	<?php
    foreach($listaLibros->librosEncontrados as $libro){
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
	echo '<a href="../controladores/borrarLibroControlador.php?idLibro=' . $libro['idLibro'].'"><img class="papelera" src="https://static.vecteezy.com/system/resources/previews/016/161/228/non_2x/recycle-bin-icon-outline-web-interface-vector.jpg"></img></a>';
	echo '<a href="../controladores/actualizarLibroControlador.php?idLibro=' . $libro['idLibro'].'"><img class="actualizar" src="../actualizar.png"></img></a>';

	}
	if($libro['idUsuario']=== null){
        echo ' <a href="../controladores/adquirirLibroControlador.php?idLibro=' . $libro['idLibro'].'&idUsuario='.$_SESSION['idUsuario'] . '"><button>Adquirir libro</button></a><br></div>';
	}else{
		echo '<button style="background-color:darkblue"><b>No disponible😞</strong></b><br></div>';
	}
	
    }
	echo'</div></div>';
	?><!-- Arrows para el slider -->
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

    echo '<h3><p>Lo sentimos '.$_SESSION['username'].'. Lamentablemente no se encontraron coincidencias con " '.$_POST['busqueda'].' "</p></h3>';
}
}