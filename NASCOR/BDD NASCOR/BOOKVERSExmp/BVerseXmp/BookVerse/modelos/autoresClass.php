<?php
include_once("../modelos/connectClass.php");
include_once("../modelos/intranetClass.php");

class conjuntoAutores extends connect{
	private $db;
	public $autores;
	public $librosAutor;
	public function __construct() {
		//session_start();
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}		
		$conexion = new connect();
		$this->db = $conexion->conexion();
		$this->leerAutores();
		}
	
	public function leerAutores(){
		if (isset($_SESSION['username'])) {
			$sql = "SELECT * 
			FROM `GB_Autor`, GB_Persona 
			WHERE GB_Autor.idAutor = GB_Persona.idPersona;";
			$query = $this->db->query($sql);
			while ($fila = $query->fetch_assoc()) {
				$this->autores[] = $fila;
			}	
			return $this->autores;
		}else{
			echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
		}
	}
	
	public function verDatosAutor($idAutor) {
    if (isset($_SESSION['username'])) {
        // Consulta para obtener datos del autor desde GB_Autor y GB_Persona
        $sql = "SELECT * 
                FROM GB_Autor, GB_Persona 
                WHERE GB_Autor.idAutor = GB_Persona.idPersona
                AND GB_Autor.idAutor = '$idAutor'";

        $query = $this->db->query($sql);

        if ($query) {
            $datosAutor = $query->fetch_assoc();
            $query->close();

            // Ahora verifica si existen libros asociados en GB_Autor_Libro
            $sqlLibros = "SELECT COUNT(*) AS numLibros 
                          FROM GB_Autor_Libro 
                          WHERE GB_Autor_Libro.idAutor = '$idAutor'";
            $queryLibros = $this->db->query($sqlLibros);
            $resultLibros = $queryLibros->fetch_assoc();
            $queryLibros->close();

            // Agregar el resultado de libros al arreglo $datosAutor
            $datosAutor['numLibros'] = $resultLibros['numLibros'];

            return $datosAutor;
        } else {
            return null;
        }
    } else {
        echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			  <a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
    }
}

	/*public function verDatosAutor($idAutor) {
	if (isset($_SESSION['username'])) {
		$sql = "SELECT * 
				FROM GB_Autor, GB_Persona, GB_Autor_Libro 
				WHERE GB_Autor.idAutor = GB_Persona.idPersona
				AND GB_Autor_Libro.idAutor = '$idAutor'
				AND GB_Autor.idAutor = '$idAutor' ";

		$query = $this->db->query($sql);

		if ($query) {
			$datosAutor = $query->fetch_assoc();
			$query->close();
			return $datosAutor;
		} else {
			return null;
		}
	} else {
		 echo '<h2 style="margin-left:50px; margin-top:50px;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:10%; left:40%;"><button>Iniciar sesión</button></a>';
		}
		
	}*/
	
	 public function añadirAutor($nombreAutor, $ap1Autor, $ap2Autor, $fechaN, $generoLiterario, $premios) {
		if (isset($_SESSION['username'])) {
        // Insertar datos en la tabla GB_Persona
        $sql = "INSERT INTO `GB_Persona` (`idPersona`, `nombre`, `apellido1`, `apellido2`, `fechaNacimiento` ) 
                VALUES (NULL,\"$nombreAutor\", \"$ap1Autor\", \"$ap2Autor\", '$fechaN')";
        $query = $this->db->query($sql);

        // Obtener el ID de la persona recién insertada
        $idPersona = $this->db->insert_id;

        // Insertar datos en la tabla GB_Usuario
		$sql = "INSERT INTO `GB_Autor` (`idAutor`, `generoLiterario`, `premios`) 
       			 VALUES (\"$idPersona\", \"$generoLiterario\", \"$premios\")";
		
        $query = $this->db->query($sql);	
		} else {
			 echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
		}
    }
	
	public function consultarLibrosAutor($idAutor){
		if (isset($_SESSION['username'])) {
   		 	$sql = "SELECT GB_Persona.nombre AS nombreAutor, GB_Persona.apellido1 AS ape1Autor, GB_Persona.apellido2 AS ape2Autor, 						GB_Libro.titulo, GB_Libro.generoLiterario, GB_Libro.añoPublicacion, GB_Libro.numPaginas, GB_Libro.idioma, 								GB_Libro.premios, GB_Libro.sinopsisLibro, GB_Libro.imagen, GB_Libro.idLibro
           		FROM GB_Autor_Libro, GB_Autor, GB_Persona, GB_Libro 
            	WHERE GB_Autor_Libro.idAutor = GB_Autor.idAutor
            	AND GB_Autor_Libro.idLibro = GB_Libro.idLibro
            	AND GB_Autor.idAutor = GB_Persona.idPersona
            	AND GB_Autor.idAutor = '$idAutor'";
			
		 	$query = $this->db->query($sql);
			while ($fila = $query->fetch_assoc()) {
			$this->librosAutor[] = $fila;
			}
			return $this->librosAutor;			
		} else {
			 echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
		}
	}

	public function modificarAutor($idAutor, $nombre, $apellido1, $apellido2, $fechaN, $premios, $generoLiterario) {
    if (isset($_SESSION['username'])) {
        $sql = "UPDATE `GB_Persona` SET 
                    `nombre` = \"$nombre\",
                    `apellido1` = \"$apellido1\",
                    `apellido2` = \"$apellido2\",
                    `fechaNacimiento` = '$fechaN'
                WHERE `GB_Persona`.`idPersona` = $idAutor";
        $query = $this->db->query($sql);

        $sql = "UPDATE `GB_Autor` SET 
                    `premios` = \"$premios\",
                    `generoLiterario` = \"$generoLiterario\"
                WHERE `GB_Autor`.`idAutor` = $idAutor";
        $query = $this->db->query($sql);
    } else {
          echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
    	}
	}
	
	public function borrarAutor($idAutor) {
		if (isset($_SESSION['username'])) {
			// Consulta SQL para verificar si el autor tiene libros
			$sql = "SELECT COUNT(*) as numLibros FROM GB_Autor_Libro WHERE idAutor = $idAutor";
			$query = $this->db->query($sql);
			$resultado = $query->fetch_assoc();
			//$query->fetch(PDO::FETCH_ASSOC)
			if ($resultado['numLibros'] > 0) {
				// El autor tiene libros, muestra una alerta o toma la acción que desees
					echo "<script>alert('No se puede borrar un autor que tiene libros.')</script>";
			} else {
				// Si no tiene libros, procede a eliminar el autor y sus registros relacionados
				$sql = "DELETE FROM GB_Autor_Libro WHERE idAutor = $idAutor";
				$query = $this->db->query($sql);

				$sql = "DELETE FROM GB_Autor WHERE idAutor = $idAutor";
				$query = $this->db->query($sql);

				$sql = "DELETE FROM GB_Persona WHERE idPersona = $idAutor";
				$query = $this->db->query($sql);
				}
		}else{
			echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';	
		}
	}

	public function	buscarAutor($busqueda){
		if (isset($_SESSION['username'])) {
			$sql = "SELECT *
					FROM GB_Persona, GB_Autor
					WHERE GB_Persona.idPersona = GB_Autor.idAutor
					AND (GB_Persona.nombre like '%$busqueda%'
						OR GB_Persona.apellido1 like '%$busqueda%'
						OR GB_Persona.apellido2 like '%$busqueda%') ";
			$query = $this->db->query($sql);
			while ($fila = $query->fetch_assoc()) {
				$this->autoresEncontrados[] = $fila;
			}
		} else {
			 echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
		}
	
	}
		
}

