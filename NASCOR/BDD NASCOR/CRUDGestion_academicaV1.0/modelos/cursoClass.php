<?php
class Curso {
	public $id;
	public $nombre;
	public function __construct($id,$nombre) {
		$this->id=$id;
		$this->nombre=$nombre;
	}
	public function getNombre() {
		return $this->nombre;
	}
	public function getId() {
		return $this->id;
	}
		
}