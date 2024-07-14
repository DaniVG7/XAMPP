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

}  