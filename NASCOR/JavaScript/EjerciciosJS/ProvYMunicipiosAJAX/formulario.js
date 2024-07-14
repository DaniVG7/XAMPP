function leerProvincias() {
	var url="https://pimec01.md360.es/servidor/provincias.php";
	var request=new XMLHttpRequest();
	request.responseType = "application/json";
	request.open("GET",url);
	request.onload = function() {
		if (request.status==200) {
			procesarProvincias(request.responseText);
		}
	}
	request.send(null);
}
function procesarProvincias(respuestaJSON) {
	var provincias = JSON.parse(respuestaJSON);
	var lista = document.getElementById("provincia");
	lista.options[0] = new Option("- Selecciona una provincia-");
	for (i=0; i<provincias.length;i++) {
		lista.options[i+1]= new Option(provincias[i].nm,provincias[i].id);
	}
}
function leerMunicipios(prov) {
	var url="https://pimec01.md360.es/servidor/municipios.php";
	var request=new XMLHttpRequest();
	request.responseType = "application/json";
	request.open("GET",url);
	request.onload = function() {
		if (request.status==200) {
			procesarMunicipios(request.responseText,prov);
		}
	}
	request.send(null);
}
function procesarMunicipios(municipiosJSON,provincia) {
	var municipios = JSON.parse(municipiosJSON);
	var listaMunicipios = document.getElementById("municipios");
	listaMunicipios[0] = new Option("Seleccione un municipio");
	var municipiosProv = municipios.filter((a) => a.id.substr(0,2)==provincia);
	for (i=0;i<municipiosProv.length;i++) {
		listaMunicipios.options[i+1] = new Option(municipiosProv[i].nm,municipiosProv[i].id);
	}
	
}

document.body.onload=leerProvincias;
document.getElementById("provincia").onchange=function() { leerMunicipios(this.value);}



// Como definirias que es HTML --> Lenguaje de marcas.
// HOJAS CSS--> Permite separar el esqueleto de la pagina de la presentación 
// 2 cajas en tipo block con margen inferior y superior, los margenes se superponen , habria que poner un inline-block.
// @media en el linkstylesheet ? (@media (print....))
// MobileFirst ...

//JS acceder a un array (al ultimo seria: nombrearray.length-1)
// diferencia entre ++ numero y                                        numero++  
//                   incrementamos antes de hacer la operacion 			hacemos la operacion y luego incrementamos
//DOM para manipular cosas de html
//Evento onchange (cuando cambiamos elementos de un formulario (select por ejemplo))
//Cambiar estilos con JS .style.color en un elemento EJ: getElementById('caja').style.color = blue;

// Metodos de usabilidad : 
// Diferencia entre usabilidad y accesibilidad.

