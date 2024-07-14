<?php
include_once("../modelos/connectClass.php");
include_once("../modelos/intranetClass.php");
include_once('../modelos/conjuntoLibrosClass.php');

class conjuntoUsuarios extends connect{
	private $db;
	public $usuarios;
	public function __construct() {
		//session_start();
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		
		$conexion = new connect();
		$this->db = $conexion->conexion();
		$this->leerUsuarios();
		}
	
	public function leerUsuarios(){
		$sql = "SELECT * FROM `GB_Usuario`";
		$query = $this->db->query($sql);
		while ($fila = $query->fetch_assoc()) {
			$this->usuarios[] = $fila;
		}	
	}
	
	public function leerUsuario($username) {
    $sql = "SELECT * FROM `GB_Usuario` WHERE GB_Usuario.username = '$username'";
    $query = $this->db->query($sql);

    if ($query) {
        // Verifica si la consulta se realizó con éxito
        if ($query->num_rows > 0) {
            // Recupera los datos del usuario
            $usuario = $query->fetch_assoc();
            return $usuario;
        } else {
            // No se encontraron registros para el nombre de usuario dado
            return null;
        }
    } else {
        // La consulta falló
        return null;
    }
}
   public function registrarUsuario($nombreUsuario, $ap1Usuario, $ap2Usuario, $DNI, $fechaN, $numeroTelefono, $usuario, $password) {
        // Insertar datos en la tabla GB_Persona
        $sql = "INSERT INTO `GB_Persona` (`idPersona`, `nombre`, `apellido1`, `apellido2`, `DNI`, `fechaNacimiento`, `numeroTelefono`) 
                VALUES (NULL,\"$nombreUsuario\", \"$ap1Usuario\", \"$ap2Usuario\", \"$DNI\", '$fechaN', $numeroTelefono)";
		   //-----------------------------------------------------------------------------------------------------------------------------				EL INT DE NUMEROTELEFONO SOLO NOS DEJA INTRODUCIR UN MAXIMO DE 9 NUMEROS, DE LO CONTRARIO DARÁ ERROR 
		   if ($this->db->error) {
    die("Error de la base de datos: " . $this->db->error);
}
        $query = $this->db->query($sql);

        // Obtener el ID de la persona recién insertada
        $idPersona = $this->db->insert_id;

        // Insertar datos en la tabla GB_Usuario
        $sql = "INSERT INTO `GB_Usuario` (`idUsuario`, `perfilUsuario`, `username`, `password`, `valor_cookie`, `fecha`) 
                VALUES ('".$idPersona."', 'usuario', \"$usuario\",  '" . md5($password) . "', NULL, NULL)";
		   //---------------------------------------------------------------------------------------------------
		//TENEMOS QUE ESTABLECER LA FECHA COMO NULL PREDETERMINADAMENTE PARA QUE NO DE ERRORES.
		   if ($this->db->error) {
    			die("Error de la base de datos: " . $this->db->error);
			}
        $query = $this->db->query($sql);	   
    }
	
	public function nombreUsuarioExiste($usuario) {
    $sql = "SELECT idUsuario FROM GB_Usuario WHERE username = '$usuario'";
    $result = $this->db->query($sql);

    if ($result->num_rows > 0) {
        return true; // El nombre de usuario ya existe
    } else {
        return false; // El nombre de usuario no existe
    }
}
	
	public function verDatosUsuario($username) {
	if (isset($_SESSION['username'])) {
		$sql = "SELECT * 
				FROM GB_Usuario, GB_Persona 
				WHERE GB_Usuario.idUsuario = GB_Persona.idPersona
				AND GB_Usuario.username = '$username' ";

		$query = $this->db->query($sql);

		if ($query) {
			$datosUsuario = $query->fetch_assoc();
			$query->close();
			return $datosUsuario;
		} else {
			return null;
		}
	} else {
			 echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
		}
		
	}
	
	public function verContraseñaUsuario($idUsuario) {
	if (isset($_SESSION['username'])) {
		$sql = "SELECT * 
				FROM GB_Usuario 
				WHERE GB_Usuario.idUsuario = $idUsuario ";

		$query = $this->db->query($sql);

		if ($query) {
			$datosUsuario = $query->fetch_assoc();
			$query->close();
			return $datosUsuario;
		} else {
			return null;
		}
	} else {
			 echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
		}
		
	}
	
	public function verPrivilegiosUsuario($idUsuario) {
	if (isset($_SESSION['username'])) {
		$sql = "SELECT * 
				FROM GB_Usuario, GB_Persona 
				WHERE GB_Usuario.idUsuario = GB_Persona.idPersona
				AND GB_Usuario.idUsuario = '$idUsuario' ";

		$query = $this->db->query($sql);

		if ($query) {
			$datosUsuario = $query->fetch_assoc();
			$query->close();
			return $datosUsuario;
		} else {
			return null;
		}
	} else {
		echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
		<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
		}
		
	}
	
	
	public function modificarUsuario($idUsuario,$nombre,$apellido1,$apellido2,$DNI,$fechaN, $numeroTelefono){
		if (isset($_SESSION['username'])) {
			$sql = "UPDATE `GB_Persona` SET `nombre` = '$nombre',
									   `apellido1` = '$apellido1',
									   `apellido2` = '$apellido2',
									   `DNI` = '$DNI',
									   `fechaNacimiento` = '$fechaN',
									   `numeroTelefono` = '$numeroTelefono'
					 WHERE `GB_Persona`.`idPersona` = $idUsuario";		
			$query = $this->db->query($sql);
		}else {
			 echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
		}
	}
	public function modificarPrivilegiosUsuario($idUsuario, $nombre, $apellido1, $apellido2, $DNI, $fechaN, $numeroTelefono, $perfilUsuario) {
    if (isset($_SESSION['username'])) {
        // Actualizar la tabla GB_Persona
        $sqlPersona = "UPDATE GB_Persona SET 
            nombre = '$nombre',
            apellido1 = '$apellido1',
            apellido2 = '$apellido2',
            DNI = '$DNI',
            fechaNacimiento = '$fechaN',
            numeroTelefono = '$numeroTelefono'
        WHERE idPersona = $idUsuario";
        $queryPersona = $this->db->query($sqlPersona);

        // Actualizar la tabla GB_Usuario
        $sqlUsuario = "UPDATE GB_Usuario SET 
            perfilUsuario = '$perfilUsuario'
        WHERE idUsuario = $idUsuario";
        $queryUsuario = $this->db->query($sqlUsuario);

        if ($queryPersona && $queryUsuario) {
            // Ambas consultas se ejecutaron con éxito, puedes devolver un indicador de éxito o redirigir a otra página
            return true;
        } else {
            // Ocurrió un error durante la actualización, puedes devolver un indicador de error
            return false;
        }
    } else {
         echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
    }
}

	
	public function adquirirLibro($idUsuario,$idLibro){
		if (isset($_SESSION['username'])) {
			$sql = "UPDATE `GB_Libro` SET `idUsuario` = '$idUsuario' 
			WHERE `GB_Libro`.`idLibro` = $idLibro;";		
			$query = $this->db->query($sql);
		}else {
			 echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
		}
	}
	
	public function borrarCuenta($idUsuario){
		if (isset($_SESSION['username'])) {
			$sql = "UPDATE `GB_Libro` SET `idUsuario` = NULL WHERE `GB_Libro`.`idUsuario` = $idUsuario";
			$query = $this->db->query($sql);
			$sql = "DELETE FROM GB_Usuario WHERE `GB_Usuario`.`idUsuario` = $idUsuario";
			$query = $this->db->query($sql);
			$sql = "DELETE FROM GB_Persona WHERE `GB_Persona`.`idPersona` = $idUsuario";
			$query = $this->db->query($sql);
		}else{
			 echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
		}
	}
	
	
	public function modificarContraseña($idUsuario, $password){
		if (isset($_SESSION['username'])) {
			$sql = "UPDATE `GB_Usuario` SET `password` = MD5('$password') WHERE `GB_Usuario`.`idUsuario` = $idUsuario;";
			$query = $this->db->query($sql);
		}else{
			 echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
		}
	}
	
	
	public function buscarUsuario($busqueda){
    if (isset($_SESSION['username'])) {
        $sql = "SELECT *
                FROM GB_Usuario
                WHERE GB_Usuario.username LIKE '%$busqueda%';";
        $query = $this->db->query($sql);
        if ($query) {
            while ($fila = $query->fetch_assoc()) {
                $this->usuariosEncontrados[] = $fila;
            }
        }
    } else {
         echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
        <a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
    }
}

} 
