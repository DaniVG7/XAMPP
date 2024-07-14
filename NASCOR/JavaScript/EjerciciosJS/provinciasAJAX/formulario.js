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

document.body.onload=leerProvincias(); //Para que nada mas entrar a la pagina me cargue los selectores de provincias. En este caso también puede escribirse sin (), poniendo solamente onload=leerProvincias;