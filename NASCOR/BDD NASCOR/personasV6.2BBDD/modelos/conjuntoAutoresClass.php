<?php
require_once 'connectClass.php';
class conjuntoAutores extends connect {
	private $bd;
	public $autores;
	
	public function __construct() {
		$this->bd=connect::conexion();	
		$this->leerAutores();
	}
	public function leerAutores() {
		$sql="select * from GB_Autor";
		$query = $this->bd->query($sql);
		while ($fila=$query->fetch_assoc()) {
			$this->autores[] = $fila; 
		}
	}

}  