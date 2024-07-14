function escoger (elemento, lista){
    var num = document.getElementById('numero'+elemento).value;
    var nodoLista = document.getElementById(lista);
    var li = nodoLista.getElementsByTagName('li');
    var numEscogido = li[num-1];
    if(num < 1 || num > li.length || isNaN(num)){
        document.getElementById('resultado'+elemento).innerHTML ='<br><span style= color:red> Escoja un producto de la lista</span> <br>';
    }else{
        document.getElementById('resultado'+ elemento).innerHTML = '<br><span style= color:green> Producto añadido al menú </span><br>'
        document.getElementById('menu').innerHTML +='<ol>✅ '+ numEscogido.innerHTML+'</ol>';
    }
}

function añadir (elemento,lista){
    var nuevoElemento = document.getElementById('añadir'+elemento).value;
    nodoLista = document.getElementById(lista);
    var nuevoLi = document.createElement('li');
    var nodoTexto = document.createTextNode(nuevoElemento);
    nuevoLi.appendChild(nodoTexto);
    if(!isNaN(nuevoElemento)){
        document.getElementById('resultado'+elemento).innerHTML = '<br><span style= color:red> Producto no válido </span> <br>'
    }else{
        nodoLista.appendChild(nuevoLi);
        document.getElementById('resultado'+elemento).innerHTML = '<br><span style= color:green> Producto añadido a la lista </span> <br>'
    }
}

function eliminar (elemento, lista){
    var numEliminar = Number(document.getElementById('eliminar'+elemento).value);
    var elementoEliminar= numEliminar-1;
    var nodoLista = document.getElementById(lista);
    var liLista = nodoLista.getElementsByTagName('li');
    if(numEliminar < 0 || numEliminar> liLista.length || numEliminar== ''){
        document.getElementById('resultado'+elemento).innerHTML = '<br><span style= color:red>Producto a eliminar no válido</span>'
    }else{
        nodoLista.removeChild(liLista[elementoEliminar]);
        document.getElementById('resultado'+elemento).innerHTML ='<br><span style= color:green>Producto eliminado correctamente</span>'
    }
}

// VACIAR MENÚ:

function vaciarMenu() {
    
    // Vaciar el contenido
    document.getElementById('menu').innerHTML = "<h4>MENÚ PERSONALIZADO: 🍽️🍴🥄</h4><br><input type='button' name='' id='' value='Vaciar Menú' onclick='vaciarMenu()'>";
    // Limpiar el campo de resultado elemento cuando vaciamos:
    document.getElementById('resultadoEntrante').innerHTML = "";
    document.getElementById('resultadoPlatoPrincipal').innerHTML = "";
    document.getElementById('resultadoPostre').innerHTML = "";
}
    