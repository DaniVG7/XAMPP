<?php
include_once("../modelos/connectClass.php");
include_once("../modelos/intranetClass.php");

class conjuntoLibros extends connect{
	private $db;
	public function __construct() {
		session_start();
		$conexion = new connect();
		$this->db = $conexion->conexion();
	}


	public function leerLibrosUsuario() {
		if (isset($_SESSION['username'])) {
			$sql = "SELECT GB_Libro.*, GB_Persona.nombre AS nombreLector, GB_Persona.apellido1 AS apellido1Lector, GB_Persona.apellido2 as 						apellido2Lector, GB_Usuario.username
					FROM GB_Libro, GB_Usuario, GB_Persona
					WHERE GB_Usuario.idUsuario = GB_Libro.idUsuario
					AND GB_Persona.idPersona = GB_Usuario.idUsuario
					AND GB_Usuario.username = '" . $_SESSION['username'] . "'";

			$query = $this->db->query($sql);
			while ($fila = $query->fetch_assoc()) {
				$this->libros[] = $fila;
			}
		} else {
			  echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
		}
	}
	
	public function consultarLibros() {
		if (isset($_SESSION['username'])) {
			$sql = "SELECT * FROM `GB_Libro` ";
			$query = $this->db->query($sql);
			while ($fila = $query->fetch_assoc()) {
				$this->libros[] = $fila;
			}

		} else {
			 echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
		}
	}
	
	public function leerLibro($idLibro) {
    if (isset($_SESSION['username'])) {
        $sql = "SELECT GB_Libro.*,GB_Autor.idAutor, GB_Persona.nombre AS nombreAutor, GB_Persona.apellido1 AS ape1Autor, GB_Persona.apellido2 AS ape2Autor
                FROM GB_Libro, GB_Autor, GB_Persona, GB_Autor_Libro
                WHERE GB_Autor.idAutor = GB_Persona.idPersona
                AND GB_Autor_Libro.idAutor = GB_Autor.idAutor
                AND GB_Autor_Libro.idLibro = GB_Libro.idLibro
                AND GB_Libro.idLibro = $idLibro;";
        $query = $this->db->query($sql);

        // Comprueba si se obtuvieron resultados
        if ($query) {
            return $query->fetch_assoc();
        } else {
            return null; // Devuelve null si no se encontraron resultados
        }
    } else {
      echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
        return null; // Devuelve null si el usuario no ha iniciado sesión
    }
}

	public function devolverLibro($idLibro) {
		if (isset($_SESSION['username'])) {
			$sql="UPDATE `GB_Libro` SET `idUsuario` = NULL 
				  WHERE `GB_Libro`.`idLibro` = $idLibro;";
			$query = $this->db->query($sql);
		}else{
			 echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
		}
	}	
	
	
	public function añadirLibro($titulo, $numeroPaginas, $idioma, $añoPublicacion, $generoLiterario, $premios, $imagen, $sinopsis, $autorSeleccionado) {
		if (isset($_SESSION['username'])) {            
			$sql = "INSERT INTO GB_Libro (titulo, numPaginas, idioma, añoPublicacion, generoLiterario, premios, sinopsisLibro, imagen) 
				VALUES ('$titulo', $numeroPaginas, '$idioma', $añoPublicacion, '$generoLiterario', '$premios', '$sinopsis', '$imagen')";

			$query = $this->db->query($sql);

			if ($query) {
				$idLibroInsertado = $this->db->insert_id;
				foreach ($autorSeleccionado as $idAutor) {
					$sql = "INSERT INTO GB_Autor_Libro (idAutor, idLibro) 
							VALUES ($idAutor, $idLibroInsertado)";
					$query = $this->db->query($sql);

					if (!$query) {
						// Hubo un error en la consulta SQL
						echo "Error en la consulta SQL: " . $this->db->error;
					}
				}
			} else {
				// Hubo un error en la consulta SQL
				echo "Error en la consulta SQL: " . $this->db->error;
				}
		}else{
			echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
		}
	}

	
	public function buscarLibro($tituloIntroducido){
		if (isset($_SESSION['username'])) {
			$sql = "SELECT * 
					FROM GB_Libro, GB_Autor, GB_Persona, GB_Autor_Libro
					WHERE GB_Libro.idLibro = GB_Autor_Libro.idLibro
					AND GB_Autor.idAutor = GB_Autor_Libro.idAutor
					AND GB_Autor.idAutor = GB_Persona.idPersona
					AND GB_Libro.titulo LIKE '%$tituloIntroducido%'";
			$query = $this->db->query($sql);
			while ($fila = $query->fetch_assoc()) {
				$this->librosEncontrados[] = $fila;
			}
		} else {
			 echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
		}
	
	}
	
	public function modificarLibro($idLibro, $idAutor, $titulo, $numPaginas, $idioma, $añoPublicacion, $generoLiterario, $premios, $sinopsis){
		if (isset($_SESSION['username'])) {
			$sql = "UPDATE `GB_Libro` SET `titulo` = '$titulo',
										`numPaginas` = '$numPaginas', 
										`idioma` = '$idioma',
										`añoPublicacion` = '$añoPublicacion',
										`generoLiterario` = '$generoLiterario',
										`premios` = '$premios',
										`sinopsisLibro` = '$sinopsis'
					WHERE `idLibro` = $idLibro;";
			$query = $this->db->query($sql);
			$sql = "UPDATE `GB_Autor_Libro` SET `idAutor` = '$idAutor' 
					WHERE `GB_Autor_Libro`.`idLibro` = $idLibro;";
			$query = $this->db->query($sql);
		}else{
			echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
		}
	}
	
	public function borrarLibro($idLibro){
		if (isset($_SESSION['username'])) {
			$sql= "DELETE FROM GB_Autor_Libro WHERE `GB_Autor_Libro`.`idLibro` = $idLibro";
			$query = $this->db->query($sql);
			$sql= "DELETE FROM GB_Libro WHERE GB_Libro.idLibro = $idLibro";
			$query = $this->db->query($sql);
		}else{
			echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
		}

	}

}
