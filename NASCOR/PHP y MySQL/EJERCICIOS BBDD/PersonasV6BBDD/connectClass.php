<?php
class connect {
	public function conexion() {
		$cnx = new mysqli('localhost', 'nascor13', 'Nasc0r2020!', 'nascor13_bbddcurso');
		$cnx->set_charset("utf-8");
		return $cnx;
	}
}