function mostrarAnadirCurso() {
	if (document.getElementById("zonaAnadir").style.display=='none') {
		document.getElementById("zonaAnadir").style.display='block';
		document.getElementById("anadirCurso").value='Ocultar añadir curso';
	} else {
		document.getElementById("zonaAnadir").style.display='none';
		document.getElementById("anadirCurso").value='Mostrar añadir curso';
	}
}
function anadirCurso() {
	nombre = document.getElementById("nombre").value;
	var url = "https://nascor13.md360.es/gestion_academicaV3.5/controladores/anadirCursoAjaxControlador.php";
	var request = new XMLHttpRequest();
	request.responseType = "application/json";
	request.open("POST", url); //Solo configura la llamada
	request.onload = function() {
		if (request.status == 200) { //200 significa correcto.
			actualizar(); 
		}
		};
	var data = JSON.stringify({ nombre: nombre });
	request.send(data);	
}
function actualizar() {
	mostrarAnadirCurso();
	var url="https://nascor13.md360.es/gestion_academicaV3.5/controladores/leerCursosJSONControlador.php";
	var request=new XMLHttpRequest();
	request.responseType = "application/json";
	request.open("GET",url,true);
	request.onload = function() {
		if (request.status==200) {
			procesarCursos(request.responseText);
		}
	}
  request.send(null);	
}
function procesarCursos(respuestaJSON) {
	var cursos = JSON.parse(respuestaJSON);
	var lista = document.getElementById("cursos");
	lista.options[0] = new Option("- Selecciona una opción-","");
	for (i=0; i<cursos.cursos.length;i++) {
		lista.options[i+1]= new Option(cursos.cursos[i].nombreCurso,cursos.cursos[i].idCurso);
	}
	console.log(lista);
}


