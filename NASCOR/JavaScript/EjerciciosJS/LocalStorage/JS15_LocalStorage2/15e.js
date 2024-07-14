//seleccionar('bebida','listaBebidas')
//seleccionar('pasta','listaPastas')
function seleccionar(elemento,lista) {
	//Seleccionamos el número de bebida
	var num=document.getElementById('num'+elemento).value;
	//Recuperar el nodo lista
	var nodoLista=document.getElementById(lista);	
	//Seleccionamos el array de LI's 
	var x = nodoLista.getElementsByTagName("LI");
	//Le restamos una unidad al número que hemos elegido pq los
	//arrays empiezan en 0. 
	document.getElementById("demo"+elemento).innerHTML += x[num-1].innerHTML+'<br>';
}
//anadir('Bebida','listaBebidas')
function anadir(elemento,lista) {
	//Obtener nombre bebida a insertar
	var nombre = document.getElementById("nombre"+elemento).value;
	//Creamos el nodo li
	var nodoLi = document.createElement("li");
	//Creamos el nodo de texto
	var nodoTexto = document.createTextNode(nombre);
	//Unimos el nodo texto como hijo del nodoLi
	nodoLi.appendChild(nodoTexto);
	//Selecionar el nodo lista Bebidas
	nodoLista=document.getElementById(lista);
	//Añadimos el li al body
	nodoLista.appendChild(nodoLi);
	document.getElementById("demo"+elemento.toLowerCase()).innerHTML += elemento+' insertada<br>';
	guardarLista(lista);
}
function borrar(elemento,lista) {
	//Seleccionamos el número de bebida
	var num=document.getElementById('num'+elemento+'Eliminar').value;
	//Recuperar el nodo listaBebidas
	var nodoLista=document.getElementById(lista);		
	//Seleccionamos el array de LI's del documento.	
	var x = nodoLista.getElementsByTagName("LI");
	// Seleccionamos el elemento a eliminar y es el padre el que lo elimina.
	x[num - 1].parentNode.removeChild(x[num - 1]);	
	document.getElementById("demo"+elemento.toLowerCase()).innerHTML += elemento+' eliminada<br>';
	guardarLista(lista);
}
function guardarLista(nombreLista) {
	nodoLista = document.getElementById(nombreLista);
	arrayLI = nodoLista.getElementsByTagName('li');
	arrayElementos = new Array();
	for (i=0;i<arrayLI.length;i++) {
		arrayElementos.push(arrayLI[i].innerHTML);
	}
	listaJSON = JSON.stringify(arrayElementos);
	localStorage.setItem(nombreLista,listaJSON);
}
function guardarDatos() {
	guardarLista('listaBebidas');
	guardarLista('listaPastas');
} 
function recuperarLista(nombreLista) {
	var nodoLista = document.getElementById(nombreLista);
	nodoLista.innerHTML='';
	var arrayLista = JSON.parse(localStorage.getItem(nombreLista));
	for (i=0;i<arrayLista.length;i++) {
		var nodoLi = document.createElement("li");
		//Creamos el nodo de texto
		var nodoTexto = document.createTextNode(arrayLista[i]);
		//Unimos el nodo texto como hijo del nodoLi
		nodoLi.appendChild(nodoTexto);
		//Añadimos el nodo a la lista
		nodoLista.appendChild(nodoLi);
	}
}


function recuperarDatos() {
	recuperarLista('listaBebidas');
	recuperarLista('listaPastas');

}



