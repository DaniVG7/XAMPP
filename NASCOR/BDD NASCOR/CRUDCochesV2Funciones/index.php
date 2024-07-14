<?php  //En este caso, en el index mostraremos directamente nuestra lista de coches.
include '../0comun/libreria.php';
cabecera('coches.css','');
require_once 'conjuntoCochesClass.php'; // Cogemos la clase concjuntoCoches mediante el archivo.
$coches = new conjuntoCoches(); // ponemos el constructor para coger los datos de los coches que tenemos. 
echo '<a href="añadirCoche.php"><button>Añadir vehículo</button></a><hr>';
$coches->verCoches(); //usamos la funcion verCoches que hará lo siguiente:

//--->		foreach ($this->coches as $clave => $coche) {
//			echo '<div class="verCoches"><a href="borrarCoche.php?posicion='.$clave.'"><button>Borrar</button></a>';
//			echo '<a href="modificarCoche.php?posicion='.$clave.'"><button style="background-color:green"><strong>Modificar</strong>						</button>//</a><br>';	
//			$coche->mostrarDatos();		
//			echo '</div>';
//		}*Mostraremos cada objeto coches y el parametro $clave sera la posicion (esto servirá para borrar o modificar el objeto en otro archivo)
		