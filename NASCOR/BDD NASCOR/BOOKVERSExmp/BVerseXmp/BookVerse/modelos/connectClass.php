<?php
class connect {
	public function conexion() {
		$cnx = new mysqli('localhost', 'nascor04', 'Nasc0r2020!', 'nascor04_bddCurso');
		$cnx->set_charset("utf8");
		return $cnx;
	}
}




