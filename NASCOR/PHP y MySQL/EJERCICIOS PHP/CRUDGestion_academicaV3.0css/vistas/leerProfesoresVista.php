<?php 
include '../../0comun/libreria.php';
cabecera('../../0comun/estilos.css','../CSS/leerProfesores.css');
?>
<a href="anadir1ProfesorControlador.php"><button>Añadir Profesor</button></a>  <a href="leerCursosControlador.php"><button>Consultar Cursos</button></a>  <a href="leerAlumnosControlador.php"><button>Gestionar Alumnos</button></a>
<h1 stlye="color:white";>Listado de Profesores</h1>
<hr><hr>
<main>
<?php
foreach ($listaProfesores->profesores as $clave => $profe ) {
	echo '<div class="profesor">';
	echo '<a href="borrarProfesorControlador.php?posicion='.$clave.'"><button>Borrar</button></a>';
	echo '<a href="modificar1ProfesorControlador.php?posicion='.$clave.'"><button>Modificar</button></a> <br>';	
	$profe->mostrarDatos();
	echo '</div>';
} 
?>
</main>
<?php
pie("");
?>