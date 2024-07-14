function crearInputs(){
    numInputs= Number(document.getElementById('cantidadNumeros').value); //con esto creará los inputs que queramos automaticamente.
    var text= '';
    for (i=0; i<numInputs; i++){
        text += "Campo Número" + (i+1) +': <input type="number" name="num'+(i+1)+'"><br>'; //generamos HTML a través de JS.
    }
    document.getElementById('inputs').innerHTML = text + '<button onclick="ver()">orden inverso / Ver número mayor</button>' //generamos el numero de inputs que quiere el usuario mediante un bucle y al final el boton con la funcion de ver el numero mayor.

}