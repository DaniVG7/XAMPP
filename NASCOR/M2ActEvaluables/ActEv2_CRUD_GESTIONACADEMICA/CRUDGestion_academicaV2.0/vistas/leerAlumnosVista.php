<?php 
include '../../0comun/libreria.php';
cabecera('../../0comun/estilos.css','../CSS/leerAlumnos.css');
?>
<a href="anadir1AlumnoControlador.php"><button>Añadir alumno</button></a>  <a href="leerCursosControlador.php"><button>Consultar Cursos</button></a>  <a href="leerProfesoresControlador.php"><button>Gestionar Profesores</button></a>
<h1>Listado de alumnos</h1>
<hr><hr>
<main>
<?php
foreach ($alumnos->alumnos as $clave => $alu ) {
	echo '<div class="alumno">';
	echo '<a href="borrarAlumnoControlador.php?posicion='.$clave.'"><button>Borrar</button></a>  ';
	echo '<a href="modificar1AlumnoControlador.php?posicion='.$clave.'"><button>Modificar</button></a> <br>';
	$alu->mostrarDatos();
	echo '</div>';
}

echo'</main>';
pie("");
?>