class Persona {
	constructor(nombre,apellido1,apellido2,sexo) {
		this.nombre=nombre;
		this.apellido1=apellido1;
		this.apellido2=apellido2;
		this.sexo=sexo;
	}
}
function añadirPersona() {
	nombre = document.getElementById('nombre').value;
	primerApellido = document.getElementById('apellido1').value;
	segundoApellido = document.getElementById('apellido2').value;
	sexo = document.getElementById('sexo').value;
    if (nombre && primerApellido && segundoApellido && sexo){
		// Recuperar el array guardado en el localStorage
		let personas = JSON.parse(localStorage.getItem('personas'));
		if (personas==null) {
				personas = new Array();
		}
		personas.push(new Persona(nombre,primerApellido,segundoApellido,sexo));	
		listar(personas);
		//Guardar en el navegador el array de Personas
		let personasJson = JSON.stringify(personas);
		localStorage.setItem('personas',personasJson);
		console.log(personas);
    }
}
function listarFiltro(busqueda) {
	let personas = JSON.parse(localStorage.getItem('personas'));
	if (personas==null) {
			document.getElementById('resultado').innerHTML='No hay datos';
	} else {
		listaPersonas = personas.filter((per) => per.sexo==busqueda);
		console.log(listaPersonas);
		if (listaPersonas.length!=0) {
			listar(listaPersonas);			
		} else {
			document.getElementById('resultado').innerHTML='No hay datos';
		}
	}
}
function listar(listado) {
	//listaPersonas = personas.map(nombrePersona);
	//function nombrePersona(per) {
	//	return per.apellido1+' '+per.apellido2+', '+per.nombre;
	//}
	listaPersonas = listado.map((per) => per.apellido1+' '+per.apellido2+', '+per.nombre);
	listaPersonas.sort();
	//text = listaPersonas.reduce(crearLista);
	//function crearLista(total,per) {
	//	return total + '<br>'+per;
	//}
	text = listaPersonas.reduce((total,per) => total + '<br>'+per);
	
	document.getElementById('resultado').style.color = 'red';
	document.getElementById('resultado').innerHTML = text;
	
	

}

//Si queremos que al recargar la pagina nos recargue toda la lista de personas que tenemos guardada basta con poner onload en el body y la siguiente funcion:
function cargarDatos() {
		let personas = JSON.parse(localStorage.getItem('personas'));
		if (personas!=null) {
			listar(personas);			
		}
}

