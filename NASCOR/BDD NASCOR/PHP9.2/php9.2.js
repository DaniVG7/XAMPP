function crearInputs() {  //Crear inputs a traves de un valor ingresado en un input
	numInputs=Number(document.getElementById("cantidadNumeros").value); //Numero de inputs que queremos
	var text=""; //var texto vacía
	for (i=0;i<numInputs;i++) {
		text += "Num"+(i+1)+': <input type="number" name="num'+(i+1)+'"><br>'; //recorremos num inputs para crear los nuevos inputs con la variable text con cada elemento recorrido
	}
	document.getElementById('inputs').innerHTML=text+'<input type="submit" value="Orden inverso/ Numero Mayor">'; //Añadimos un submit dentro del formulario para que nos haga la accion del PHP y nos muestre el orden inverso y nos calcule el número mayor.
}