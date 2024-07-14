<?php

include '../../0comun/libreria.php';
cabecera('../cursos.css','');

echo'
<a href="../Controladores/leerCursosControlador.php"><button>Gestionar Cursos</button></a> <a href="../index.php"><button>Gestionar Alumnos</button></a>  <a href="leerProfesoresControlador.php"><button>Gestionar Profesores</button></a>';

echo '<h2>Listado de Cursos Impartidos en el aula '.$aula["nombre"].'</h2>';
echo'<main>';
    if (empty($listaCursos)) {
        echo '<strong style="color:red">Actualmente no hay cursos programados en el aula ' . $aula["nombre"] . '.</strong>';
    } else {
        foreach ($listaCursos as $curso) {
            echo '<div class="curso">';
			echo '<strong>Identificador del curso: </strong>'.$curso['idCurso'].'<br>';
            echo '<strong>Nombre del curso: </strong>' . $curso['nombreCurso'];
            // Puedes habilitar el botón de borrar matrícula si es necesario.
            echo '</div>';
        }
    }

echo '</main>';
pie('');
?>
