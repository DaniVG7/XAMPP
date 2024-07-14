var actividadIndex = 2; // Inicializa el índice con el número actual de actividades

function añadirActividad() {
    var actividad = document.getElementById('actividad');
    var dia = document.getElementById('dia');
    var nota = document.getElementById('nota');

    // Incrementa el índice para crear nombres de campo únicos
    actividadIndex++;


    // Crea nuevos elementos de entrada con nombres de campo únicos---------------------------------------
    
    //Crear nuevo input text para introducir el nombre de un nueva actividad
    var nuevaActividad = document.createElement('input');
    nuevaActividad.setAttribute('type', 'text');
    nuevaActividad.setAttribute('required',true);
    nuevaActividad.setAttribute('name', 'alumno[actividad]['+actividadIndex+']');
    actividad.appendChild(nuevaActividad);
    // nuevaActividad.innerHTML += '<br>'

    //nuevo input date con un nuevo dia
    var nuevoDia = document.createElement('input');
    nuevoDia.setAttribute('type', 'date');
    nuevoDia.setAttribute('required',true);
    nuevoDia.setAttribute('name', 'alumno[dia]['+actividadIndex+']');
    dia.appendChild(nuevoDia);
    //nuevoDia.innerHTML += '<br>'

    //nuevo input number para añadir otra nota
    var nuevaNota = document.createElement('input');
    nuevaNota.setAttribute('type', 'number');
    nuevaNota.setAttribute('required',true);
    nuevaNota.setAttribute('name', 'alumno[nota]['+actividadIndex+']');
    nota.appendChild(nuevaNota);
}
