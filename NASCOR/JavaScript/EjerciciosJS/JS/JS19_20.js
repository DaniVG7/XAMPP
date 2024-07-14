function validarFormulario() {
    var nombre = document.getElementById("nombre").value;
    var primerApellido = document.getElementById("primerApellido").value;
    var segundoApellido = document.getElementById("segundoApellido").value;
    var telefono = document.getElementById('telefono').value;
    var fechaNacimiento = document.getElementById('fechaNacimiento').value;
    var email = document.getElementById('email').value;
    var condiciones = document.getElementById('condicionesPrivacidad');
    var botonEnviar = document.getElementById("botonEnviar");

    if (nombre == "") {
        alert("El campo de Nombre es obligatorio");
        return false;
    } else if (primerApellido == '') {
        alert('El campo de Primer apellido es obligatorio');
        return false;
    } else if (segundoApellido == '') {
        alert('El campo de Segundo apellido es obligatorio');
        return false;
    } else if (telefono !== '' && (!/^\d{9}$/.test(telefono) || telefono.indexOf('-') !== -1)) {  // Utiliza una expresión regular para verificar que el teléfono no contenga guiones ni caracteres especiales.
        alert('El teléfono introducido es incorrecto');
        return false;
    } else if (fechaNacimiento !== '') {
        var fecha = new Date(fechaNacimiento);
        if (isNaN(fecha) || fecha.getFullYear() < 1900 || fecha.getFullYear() > 2023) {
            alert('Introduzca una fecha de nacimiento válida');
            return false;
        }
    } else if (email !== '' && !/^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$/.test(email) ){
        alert('Introduzca un correo válido');
        return false;
    } else if (!condiciones.checked) {
        alert('Debe aceptar los términos y condiciones de nuestra política de privacidad');
        return false;
    } else{                        
         // Deshabilitamos el botón de envío y cambia su valor a "Enviando..."
        botonEnviar.disabled = true; this.value = "Enviando..."; this.form.submit();

        return true;
    }
}

function validarNombre(){
    nombre = document.getElementById('nombre').value;
    if(nombre == ''){
        document.getElementById('mensajeNombre').innerHTML = '<span class= error> El campo de Nombre es obligatorio ❌</span><br><br>';
    }else{
        document.getElementById('mensajeNombre').innerHTML = '<span class= correcto> Correcto✅ </span><br><br>';
    }

}

function validarApellido1(){
    apellido1 = document.getElementById('primerApellido').value;
    if(apellido1 == ''){
        document.getElementById('mensajeApellido1').innerHTML = '<span class= error> El campo de Primer apellido es obligatorio❌ </span><br><br>';
    }else{
        document.getElementById('mensajeApellido1').innerHTML = '<span class= correcto> Correcto✅</span><br><br>';
    }

}

function validarApellido2(){
    apellido2 = document.getElementById('segundoApellido').value;
    if(apellido2 == ''){
        document.getElementById('mensajeApellido2').innerHTML = '<span class= error> El campo de Segundo apellido obligatorio❌</span><br><br>';
    }else{
        document.getElementById('mensajeApellido2').innerHTML = '<span class= correcto> Correcto✅</span><br><br>';
    }

}

function validarTelefono(){
    telefono = document.getElementById('telefono').value;
    if (telefono !== '' && (!/^\d{9}$/.test(telefono) || telefono.indexOf('-') !== -1)){
        document.getElementById('mensajeTelefono').innerHTML = '<span class= "error"> El teléfono introducido no existe❌</span><br><br>'
    }else if(/^\d{9}$/.test(telefono) ){
        document.getElementById('mensajeTelefono').innerHTML = '<span class= "correcto"> El teléfono se validó correctamente✅</span><br><br>'
    }else{
        document.getElementById('mensajeTelefono').innerHTML ='';    //Haremos que desaparezca el mensaje de error si el usuario borra el número erróneo y deja el campo vacío.
    }
}

function validarFecha() {
    var fechaN = document.getElementById('fechaNacimiento').value;

    if (fechaN !== '') {
        var fecha = new Date(fechaN);
        if (isNaN(fecha) || fecha.getFullYear() < 1900 || fecha.getFullYear() > 2023) {
            document.getElementById('mensajeFecha').innerHTML = '<span class="error">La fecha es incorrecta❌</span><br><br>';
        } else {
            document.getElementById('mensajeFecha').innerHTML = '<span class="correcto">Fecha validada✅</span><br><br>';
        }
    }else{
        document.getElementById('mensajeFecha').innerHTML = ''; // Para borrar el mensaje error si el usuario decide borrar la fecha y dejarla vacía.
    }
}

function validarEmail(){
    email = document.getElementById('email').value;
    if (email !== '' && !/^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$/.test(email)){
        document.getElementById('mensajeEmail').innerHTML = '<span class= "error"> El email introducido no existe❌</span><br><br>';
    }else if(/^[\w\.-]+@[a-zA-Z\d\.-]+\.[a-zA-Z]{2,}$/.test(email)){
        document.getElementById('mensajeEmail').innerHTML = '<span class= "correcto"> El email se validó correctamente✅</span><br><br>';
    }else{
        document.getElementById('mensajeEmail').innerHTML = '' ; // Borrar el mensaje de error si el usuario borra el email y lo deja vacío.
    }
}

function validarCondiciones(){
    var condiciones = document.getElementById('condicionesPrivacidad');
    if(!condiciones.checked){
        document.getElementById('mensajeCondiciones').innerHTML = '<span class= "error"> Se deben aceptar los términos y condiciones para enviar el formulario❌</span><br><br>';
    }else{
        document.getElementById('mensajeCondiciones').innerHTML = '';
    }
}