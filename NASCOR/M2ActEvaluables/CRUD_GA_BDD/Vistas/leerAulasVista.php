<?php
session_start();
include '../../0comun/libreria.php';
cabecera('../estilos.css','');

?>
<a href="añadir1AulaControlador.php"><button>Añadir Aula</button></a>  <a href="../index.php"><button>Gestionar Alumnos</button></a>       <a href="../Controladores/leerProfesoresControlador.php"><button>Gestionar Profesores</button></a> <a href="../Controladores/leerCursosControlador.php"><button>Gestionar Cursos</button></a>
<h2>Listado de Aulas</h2>
<hr>
<?php

if (isset($_SESSION['mensajeError'])) {
	echo "<script>alert('No es posible eliminar un aula con cursos programados.⚠️')</script>";
    unset($_SESSION['mensajeError']);  // Limpia la variable de sesión después de mostrarla
}
 
echo'<hr>';
echo '<main>';

if(empty($aulas->aulas)){
	echo '<span style="color:red">No hay aulas disponibles en este momento</span>';
}else{
	foreach ($aulas->aulas as $aula ) {
			echo '<div class="cursos">';
			echo '<strong> Identificador: aula '.$aula['idAula'].'</strong></br>';
			echo '<strong>Nombre del aula: </strong>'.$aula['nombre'].'</br>';
			echo '<a href="borrarAulaControlador.php?idAula='.$aula['idAula'].'"><button>Borrar</button></a>  ';
			echo '<a href="modificar1AulaControlador.php?idAula='.$aula['idAula'].'"><button>Modificar</button></a> ';	
			echo '<a href="consultaCursosAulaControlador.php?idAula='.$aula['idAula'].'"><button>Cursos impartidos</button></a> <br>';

			echo '</div>';
		}
}
echo '</main>';

pie('');
?>
