function escoger (elemento, lista){
    var num = document.getElementById('numero'+elemento).value;
    var nodoLista = document.getElementById(lista);
    var li = nodoLista.getElementsByTagName('li');
    var numEscogido = li[num-1];
    if(num < 1 || num > li.length || isNaN(num)){
        document.getElementById('resultado'+elemento).innerHTML ='<br><span style= color:red> Escoja un plato de la lista</span> <br>';
    }else{
        document.getElementById('resultado'+ elemento).innerHTML = '<br><span style= color:green> Añadido al Menú </span><br>'
        document.getElementById('cesta').innerHTML +='<ol>✅ '+ numEscogido.innerHTML+'</ol>';
    }
}

function añadir (elemento,lista){
    var nuevoElemento = document.getElementById('añadir'+elemento).value;
    nodoLista = document.getElementById(lista);
    var nuevoLi = document.createElement('li');
    var nodoTexto = document.createTextNode(nuevoElemento);
    nuevoLi.appendChild(nodoTexto);
    if(!isNaN(nuevoElemento)){
        document.getElementById('resultado'+elemento).innerHTML = '<br><span style= color:red> Elemento no válido </span> <br>'
    }else{
        nodoLista.appendChild(nuevoLi);
        document.getElementById('resultado'+elemento).innerHTML = '<br><span style= color:green> Elemento añadido </span> <br>'
    }
}

function eliminar (elemento, lista){
    var numEliminar = Number(document.getElementById('eliminar'+elemento).value);
    var elementoEliminar= numEliminar-1;
    var nodoLista = document.getElementById(lista);
    var liLista = nodoLista.getElementsByTagName('li');
    if(numEliminar < 0 || numEliminar> liLista.length || numEliminar== ''){
        document.getElementById('resultado'+elemento).innerHTML = '<br><span style= color:red>Elemento a eliminar no válido</span>'
    }else{
        nodoLista.removeChild(liLista[elementoEliminar]);
        document.getElementById('resultado'+elemento).innerHTML ='<br><span style= color:green>Elemento eliminado correctamente</span>'
    }
}

// VACIAR CESTA:

function vaciarCesta() {
    
    // Vaciar el contenido de la cesta
    document.getElementById('cesta').innerHTML = "<h4>CESTA DE LA COMPRA 🛒</h4><br><input type='button' name='' id='' value='Vaciar cesta' onclick='vaciarCesta()'>";
    // Limpiar el campo de resultado elemento cuando vaciamos la cesta:
    document.getElementById('resultadoModelo').innerHTML = "";
    document.getElementById('resultadoColor').innerHTML = "";
    document.getElementById('resultadoAcabado').innerHTML = "";
}
    