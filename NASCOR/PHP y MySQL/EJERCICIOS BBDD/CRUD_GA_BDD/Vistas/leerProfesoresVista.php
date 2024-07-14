<?php
session_start();

include '../../0comun/libreria.php';
cabecera('../estilos.css','');

if (isset($_SESSION['mensajeError'])) {
	echo "<script>alert('❌ERROR:                                                                          No es posible eliminar un profesor con uno o más cursos asignados.⚠️⚠️ Diríjase al apartado gestión de cursos.')</script>";
    unset($_SESSION['mensajeError']);  // Limpia la variable de sesión después de mostrarla
}

echo '<a href="../Controladores/añadir1ProfesorControlador.php"><button>Añadir Profesor</button></a>  <a href="../index.php"><button>Gestionar Alumnos</button></a> <a href="../Controladores/leerCursosControlador.php"><button>Gestionar Cursos</button></a> 
<a href="../Controladores/leerCursosControlador.php"><button>Gestionar Cursos</button></a>';
echo '<h2>Lista de profesores</h2>';
echo '<hr><hr>';
echo '<main>';
if(empty($listaProfesores->profesores)){
	echo '<span style="color:red">No hay profesores disponibles en este momento.</span>';
}else{
	foreach ($listaProfesores->profesores as $profesor){
		echo '<div class="profes">';
		echo '<strong>ID Profesor: <strong>'.$profesor['idProfesor'].'<br>';
		echo '<strong>Nombre: </strong>'.$profesor['nombreProfesor'].' '.$profesor['apellido1Profesor'].' '.$profesor['apellido2Profesor'].'<br>';
		echo '<strong>DNI: <strong>'.$profesor['DNI'].'<br>';
		echo '<a href="borrarProfesorControlador.php?idProfesor='.$profesor['idProfesor'].'"><button>Borrar</button></a>  ';
		echo '<a href="modificar1ProfesorControlador.php?idProfesor='.$profesor['idProfesor'].'"><button>Modificar</button></a>  ';
		echo '</div>';
	}
}

echo '</main>';

pie("");