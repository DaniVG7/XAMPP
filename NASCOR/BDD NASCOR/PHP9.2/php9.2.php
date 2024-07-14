<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title>Campos invertidos y Número mayor</title> <!-- Con este trozo de codigo HTML lo que conseguimos es que la respuesta de PHP a nuestro submit, sea tambien HTML y coja los estilos de CSS y consigamos que aparezcan de color naranja además de cambiar el Tittle -->
</head>
<body>
	<pre>
	<?php
	//$numeros = array();
	foreach ($_POST as $val) { //Hacemos un foreach para que por cada valor enviado por POST cree un array $numeros y le vaya introduciendo cada valor enviado por metodo POST
		$numeros[] = $val;
	}
	//print_r($numeros);
	$numMayor=$numeros[0];  //Creamos una variable numMayor con el valor del primer numero del array y hacemos un for recorriendolo hasta el final 
	for($i=1; $i < count($numeros);$i++){ //el metodo count es equivalente al .length en javascript
		if ($numMayor <$numeros[$i]) {
				$numMayor = $numeros[$i]; //comparamos con cada numero del array el valor de numMayor y cogemos el más grande, asi hasta recorrer todo el array, al final tendremos que $numMayor sera = al numero más alto del array.
		}
	}
	krsort($numeros);  //krsort, es el metodo para ordenar un array de forma inversa, Empezando por el último, acabando en 0
	echo "<br>Lista de números invertidos:<br>";
	foreach ($numeros as $num) {  //Por cada valor del array $numeros se lo asignamos a una variable $num
		echo $num.'<br>';  	 	//Muestra cada num que sera cada numero del array $numeros.
	}
	//print_r($numeros);
	echo "El número mayor es ".$numMayor;

	?>
	</pre>
</body>
</html>