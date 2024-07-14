//AÑADIR, ELIMINAR, ESCOGER ELEMENTOS DE UNA O DOS LISTAS.





//seleccionar('bebida','listaBebidas')
//seleccionar('pasta','listaPastas')
function seleccionar(elemento, lista) {
	//Seleccionamos el número del elemento que introduce el usuario sabiendo que elemento puede ser = a bebida o pasta
	//concatenamos num+elemento(que haya elegido el usuario y el sera numbebida o numpasta)
	var num = document.getElementById('num'+elemento).value;
	//Recuperar el nodo lista
	var nodoLista = document.getElementById(lista);	
	//Seleccionamos los elementos LI y los volvemos un array para pasarlo a números.
	var x = nodoLista.getElementsByTagName("LI");
	//Al ser un array al elemento elegido por el usuario, hay que restarle 1 para que coincida con nuestro Array.
	var elementoElegido = x[num-1];
	//Ponemos condicionantes para que no funcione si el numero introducido por el usuario es mayor a nuestra lista, si es menor que 1 ya que no existiría en la lista o si no es un número. 
	if(num < 1 || num> x.length || isNaN(num)){
		document.getElementById("demo"+elemento).innerHTML = 'Escoja un número de la Lista <br>'
	}else{
		document.getElementById("demo"+elemento).innerHTML += 'Disfrute de su ' + elementoElegido.innerHTML + '. <br> ';
	}
}


//anadir('Bebida','listaBebidas o listaPastas')
function anadir(elemento,lista){
	//Recuperamos el nombre que queremos añadir con el id nombreelemento concatenado (nombrepasta o nombrebebida).
	var nombre = document.getElementById('nombre'+elemento).value;
	//Recuperamos el nodo lista.
	nodoLista = document.getElementById(lista);
	//Creamos un nuevo Li.
	var nuevoLi = document.createElement('li');
	//Creamos un texto con el nombre que haya introducido el usuario.
	var nodoTexto = document.createTextNode(nombre);
	//Al li le acoplamos el nodoTexto con el nombre que el usuario ha introducido, ahora estará el nombre introducido por el usuario dentro de la etiqueta li que hemos creado <li> var nombre </li>
	nuevoLi.appendChild(nodoTexto);
	//Ahora al nodoLista que teniamos inicial le acoplamos nuestro nuevoLi con el texto del usuario (var nombre)
	
	//imprimimos en el demoelemento(demopasta, demobebida) que la bebida/pasta ha sido insertada.
	if(!isNaN(nombre)){
		//Condiciones para que si introducimos un número, ponga que no es una pasta o bebida valida
		document.getElementById('demo'+elemento).innerHTML += '<span style= color:red>'+ elemento + ' no válida </span> <br>'
	}else{
		//Añadimos al nodoLista el nuevo elemento <li>(nuevoLI) con el nodoTexto(nombre) que será la bebida insertada y mostramos el mensaje.
		nodoLista.appendChild(nuevoLi);
		document.getElementById('demo'+elemento).innerHTML += '<span style=color:green>'+ elemento + ' insertada correctamente.'+ '<br>';

	}
}


//borrar('elemento', 'listaBebidas o listaPastas')
function borrar(elemento, lista) {
	//Recogemos el elemento que el usuario va a querer eliminar con el id numelementoeliminar (numpastaeliminar, numbebidaeliminar).
	var numElegido = Number(document.getElementById('num' + elemento + 'eliminar').value);
	//El elemento que querremos borrar será el numero elegido -1 ya qué tendremos un array.
	var elementoABorrar = numElegido-1;
	//Cogemos el nodo lista
	var nodoLista = document.getElementById(lista);
	//Cogemos los elementos li del nodo lista con el tagname para pasarlo a array(numeros).
	var liLista = nodoLista.getElementsByTagName('LI');
	
	if (numElegido <0 || numElegido> liLista.length || numElegido == '') {
		// mensaje elemento no válido.
		document.getElementById('demo' + elemento).innerHTML += 'Número de ' + elemento + ' a eliminar no válido' + '<br>';
	} else {
		//Ahora ons metemos en el id lista (nodoLista), le decimos remover un hijo que sera dentro de liLista(<li>) el elemento a borrar que introdujo el usuario (numElegido-1). // Eliminamos el elemento del DOM.
		nodoLista.removeChild(liLista[elementoABorrar]);
		
		//mensaje de validacion.
		document.getElementById('demo' + elemento).innerHTML += elemento + ' eliminada correctamente.' + '<br>';
	}
}
