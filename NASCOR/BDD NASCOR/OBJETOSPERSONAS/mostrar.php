<?php
include '../0comun/libreria.php';
cabecera("objetos.css",'');
echo'<pre>';
print_r($_POST);
class Persona {
    public $nombre;
    public $apellido1;
    public $apellido2;
    public $ciudad = 'Jerusalen';
    private $dni;
	
	public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }
	
    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function getDni() {
        return $this->dni;
    }
}
    /*$nombre = $_POST['nombre'];*/
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    /*$ciudad = $_POST['ciudad'];*/
    $dni = $_POST['dni'];

    $persona = new Persona();
    $persona->nombre = $_POST['nombre'];
    $persona->apellido1 = $apellido1;
    $persona->apellido2 = $apellido2;
   /* $persona->ciudad = $ciudad;*/
    $persona->setDni($dni);

    echo '<div style="background-color:white">';
    echo 'Nombre: ' . $persona->getNombre() . '<br>'; 
    echo 'Primer Apellido: ' . $persona->apellido1 . '<br>';
    echo 'Segundo Apellido: ' . $persona->apellido2 . '<br>';
    echo 'Ciudad: ' . $persona->ciudad . '<br>';
    echo 'DNI: ' . $persona->getDni() . '<br>';
    echo '</div>';

pie("");
?>
