<?php
include_once("../modelos/connectClass.php");
class intranet extends connect
{
	private $db;
	public function __construct(){
		session_start();
		$this->db = connect::conexion();
	}

	public function comprobarUsuario($username,$password) {
		$sql="SELECT count(*) AS contador FROM GB_Usuario WHERE username='".$username."' and md5('".$password."')=password ";
		$query=$this->db->query($sql);
		$row = $query->fetch_assoc();
		if ($row['contador']>0){
			$sql ="UPDATE GB_Usuario SET valor_cookie='".session_id()."',fecha=now() WHERE username LIKE '".$username."'";
			if ($this->db->query($sql) === TRUE) {
  				return true;
			} 		
			else {
				return false;
			}
		}
		else
			{return false;}
	}	
	
	public function borrarConexion() {
    session_start();

    // Actualiza la base de datos
    $sql = "UPDATE GB_Usuario SET valor_cookie = '', fecha = NULL WHERE valor_cookie = '" . session_id() . "'";
    
    if ($this->db->query($sql)) {
        // Destruye la sesión actual después de actualizar la base de datos
        session_destroy();
        return true;
    } else {
        return false;
    }
}
	
	public function identificado() {
		$sql = "SELECT count(*) as contador FROM GB_Usuario WHERE valor_cookie='".session_id()."' and date_add(fecha, INTERVAL 1 HOUR) > now()";
		$query=$this->db->query($sql);
		$row = $query->fetch_assoc();
		if ($row['contador']>0){
			return true;
		}
		else
			{return false;}
	}			
	
	public function obtenerDatosUsuario($username) {
    $sql = "SELECT * FROM GB_Usuario WHERE username = '".$username."'";
    $query = $this->db->query($sql);
    if ($query) {
        return $query->fetch_assoc();
    } else {
        return null;
    }
}

}	

?>
