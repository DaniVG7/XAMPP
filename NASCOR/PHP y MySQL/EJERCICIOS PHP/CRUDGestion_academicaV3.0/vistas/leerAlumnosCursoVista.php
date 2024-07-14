<?php
include '../../0comun/libreria.php';
cabecera ('../../0comun/estilos.css','../CSS/leerAlumnosCurso.css');
?>
<a href="anadir1AlumnoControlador.php"><button>Añadir alumno</button></a>  <a href="leerCursosControlador.php"><button>Consultar Cursos</button></a> <a href="../index.php"><button>Gestionar alumnos</button></a>
<h1>Listado de alumnos del curso
<?php
echo $cursos->buscarNombre($_GET['id']).'</h1>';
echo'<main>';
foreach ($listaAlumnosCurso as $clave => $alu ) {
	echo '<div class="alumnosCurso"><a href="borrarAlumnoControlador.php?posicion='.$clave.'"><button>Borrar</button></a>  ';
	echo '<a href="modificar1AlumnoControlador.php?posicion='.$clave.'"><button>Modificar</button></a><br>';	
	$alu->mostrarDatos();
	echo '</div>';
} 
echo'</main>';
pie("");