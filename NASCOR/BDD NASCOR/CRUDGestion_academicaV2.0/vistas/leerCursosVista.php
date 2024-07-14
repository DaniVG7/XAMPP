<?php 
include '../../0comun/libreria.php';
cabecera('../../0comun/estilos.css','../CSS/leerCursos.css');
?>
<a href="anadir1CursoControlador.php"><button>Añadir curso</button></a>  <a href="../index.php"><button>Gestionar Alumnos</button></a>  <a href="leerProfesoresControlador.php"><button>Gestionar Profesores</button></a>
<h1>Listado de Cursos</h1>
<hr><hr>
<main>
<?php
foreach ($listaCursos->cursos as $clave => $curs ) {
	echo '<div class="curso">';
	echo '<a href="borrarCursoControlador.php?posicion='.$clave.'"><button>Borrar</button></a>  ';
	echo '<a href="modificar1CursoControlador.php?posicion='.$clave.'"><button>Modificar</button></a><br>';	
	echo '<strong>Identificador: </strong>'.$curs->getId().'<br>';

	echo '<strong>Descripcion: </strong>'.$curs->getNombre();

	echo '</div>';
} 
echo '</main>';
pie("");
?>
