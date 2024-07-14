<?php
include_once("../modelos/connectClass.php");
class intranet extends Connect
{
	private $db;
	public function __construct(){
		session_start();
		$this->db = Connect::connection();
	}

	public function comprobarUsuario($username,$password) {
		$sql="SELECT count(*) AS contador FROM per_usuarios WHERE username='".$username."' and md5('".$password."')=password ";
		$query=$this->db->query($sql);
		$row = $query->fetch_assoc();
		if ($row['contador']>0){
			$sql ="UPDATE per_usuarios SET valor_cookie='".session_id()."',fecha=now() WHERE username LIKE '".$username."'";
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
		$sql="UPDATE per_usuarios SET valor_cookie='', fecha=null WHERE valor_cookie='".session_id()."'";
		if ($this->db->query($sql)) {
			return true;
		}
		else
			{return false;}
	}	
	
	public function identificado() {
		$sql = "SELECT count(*) as contador FROM per_usuarios WHERE valor_cookie='".session_id()."' and date_add(fecha, INTERVAL 1 HOUR) > now()";
		$query=$this->db->query($sql);
		$row = $query->fetch_assoc();
		if ($row['contador']>0){
			return true;
		}
		else
			{return false;}
	}			
}	

?>