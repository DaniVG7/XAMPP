<?php
require_once 'connectClass.php';
class conjuntoLibros extends connect {
	private $bd;
	public $libros;
	
	public function __construct() {
		$this->bd=connect::conexion();	
		$this->leerLibros();
	}
	public function leerLibros() {
		$sql="select * from GB_Libro";
		$query = $this->bd->query($sql);
		while ($fila=$query->fetch_assoc()) {  
			$this->libros[] = $fila; 
		}
	}
	
	public function leerLibro($id) {
	$sql="select * from GB_Libro WHERE idLibro=".$id;
	$query = $this->bd->query($sql);
		if ($fila=$query->fetch_assoc()) {
			return $fila; 
		} else {
			return 0;
		}
	}	
	
	
	public function añadirLibro($titulo,$año,$idioma,$idPropietario) {
		$sql="INSERT INTO GB_Libro (titulo, añoPublicacion, idioma, idPropietario)
              VALUES ('".$titulo."','".$año."','".$idioma."','".$idPropietario."')";
		$query = $this->bd->query($sql);
	}
	

	 public function borrarLibro($idLibro) {
        // Consulta SQL para eliminar un libro por su ID
        $sql = "DELETE FROM GB_Libro WHERE idLibro = $idLibro"; // Asegúrate de que el nombre de la tabla sea correcto

        // Obtén la conexión a la base de datos desde la propiedad $bd y ejecuta la consulta
        if ($this->bd->query($sql)) {
            return true; // Éxito
        } else {
            return false; // Error
        }
    }
	
	public function modificarLibro($pos,$titulo,$año,$idioma) {
		$sql="UPDATE `GB_Libro` 
				SET `titulo` = '".$titulo."',
    				`añoPublicacion` = '".$año."',
    				`idioma` = '".$idioma."' 
				WHERE `GB_Libro`.`idLibro` =".$pos;
		$query = $this->bd->query($sql);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}	
	
    
}  